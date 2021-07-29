<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\TreasuryBill;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $guest_perrmission = config('fast.guest_perrmission');
        Gate::before(function ($user, $ability) use ($guest_perrmission) {

            if (in_array($ability, $guest_perrmission))
                return true;

            if ($user->isSuperAdmin())
                return true;

            return null;
        });
    }
}
