<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use App\Repositories\PermissionRepository;

class LoadPermissionFromRouter extends Command
{
    /** @var  PermissionRepository */
    private $permissionRepository;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'router:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function __construct(PermissionRepository $permissionRepo)
    {
        $this->permissionRepository = $permissionRepo;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $arrExcept = [
            'ignition',
            'login',
            'logout',
            'register',
            'password'
        ];
        $routeCollection = Route::getRoutes();
        $guest_perrmissons = config('fast.guest_perrmission');
        foreach ($routeCollection as $value) {
            $name = $value->getName();
            if (in_array($name, $guest_perrmissons)) continue;

            $arrName = explode('.', $name);
            $module = $arrName[0];
            $title = $name;
            if ($module == "api") {
                $module = $arrName[1];
                $guard_name = "api";
            } else {
                $guard_name = "web";
            }
            $checkModule = ($module != null && $module != "");
            if ($checkModule) {
                foreach ($arrExcept as $item) {
                    if ($item == $module) {
                        $checkModule = false;
                        break;
                    }
                }
            }
            // Only Auth, that's using perrmisson for router.
            if ($checkModule) {
                $midd = $value->gatherMiddleware();
                $checkAuth = false;
                foreach ($midd as $item) {
                    if ($item == 'auth') {
                        $checkAuth = true;
                        break;
                    }
                }
                if (!$checkAuth) {
                    $checkModule = false;
                }
            }

            if ($checkModule) {
                $checkModule = $this->permissionRepository->checkExists($name, $guard_name);
                if (!$checkModule) {
                    $permission = [];
                    $permission['name'] = $name;
                    $permission['title'] = $title;
                    $permission['module'] = $module;
                    $permission['guard_name'] = $guard_name;
                    $this->permissionRepository->create($permission);
                }
            }
        }

        $this->info('The command was successful!');
        return 0;
    }
}
