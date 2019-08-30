<?php

namespace App\Providers;

use Bouncer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Bouncer::tables([
        'abilities' => 'bouncer_abilities',
        'assigned_roles' => 'bouncer_assigned_roles',
        'permissions' => 'bouncer_permissions',
        'roles' => 'bouncer_roles'
      ]);
    }
}
