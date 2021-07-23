<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use App\Repositories\PermissionRepository;

class LoadRouterToPermissions extends Command
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


        $routeCollection = Route::getRoutes();

        foreach ($routeCollection as $value) {
            $name = $value->getName();
            $this->info($name);
            $arrName = explode('.', $name);
            $module = $arrName[0];
            $title = $name;
            if ($module == "api") {
                $module = $arrName[1];
                $guard_name = "api";
            } else {
                $guard_name = "web";
            }
            $check = $this->permissionRepository->checkExists($name, $guard_name);
            if (!$check) {
                $permission = [];
                $permission['name'] = $name;
                $permission['title'] = $title;
                $permission['module'] = $module;
                $permission['guard_name'] = $guard_name;
                $this->permissionRepository->create($permission);
            }
        }

        $this->info('The command was successful!');
        return 0;
    }
}
