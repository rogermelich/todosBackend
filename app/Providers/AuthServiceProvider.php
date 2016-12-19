<?php

namespace App\Providers;

use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Task' => 'App\Policies\TaskPolicy',
        //'App\User'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        $this->defineGates();
    }

    private function defineGates()
    {
        Gate::define('gate-name',function() {

        });

        Gate::define('impossible-gate', function () {
            return false; //no autoritzat
        });

        Gate::define('easy-gate', function () {
            return true; //autoritzat
        });
//
//        Gate::define('update-task', function ($user, $post) {
//            return $user->id == $post->user_id;
//        });
//
//
//        Gate::define('update-task1', function ($user) {
//            return $user->isAdmin();
//        });
//
////        Gate::define('update-task2', function ($user) {
////            if ($user->isAdmin()) return true;
////
////        });
//
//        Gate::define('update-task3', function ($user, $task) {
//            if ($user->isAdmin()) return true;
//            if ($user->hasRole('editor')) return true;
//
//            return $user->id == $task->user_id;
//        });
//
//        Gate::define('show-tasks', function ($user) {
//            return false;
//        });
    }
}
