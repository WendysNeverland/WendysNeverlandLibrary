<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //checked if the user is admin before checking other gates. if user is admin than has access to all.
        Gate::before(function($user){
            if($user->roles()->first()=='admin'){
                return true;
            }
        });

        Gate::define('isAdmin', function($user){
           $role=$user->roles()->first()->role;
            if($user->roles()->first()->role=='admin'){
                return true;
            }
        });

        Gate::define('isUser', function($user){
            $role=$user->roles()->first()->role;
             if($user->roles()->first()->role=='user'){
                 return true;
             }
         });


    }
}
