<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-category',function ($user){
            return in_array('create-category',session()->get('access_permissions'));
        });
        Gate::define('view-category',function ($user){
            return in_array('view-category',session()->get('access_permissions'));
        });
        Gate::define('edit-category',function ($user){
            return in_array('edit-category',session()->get('access_permissions'));
        });
        Gate::define('delete-category',function ($user){
            return in_array('delete-category',session()->get('access_permissions'));
        });

        Gate::define('manage-userroles',function ($user){
            return in_array('manage-userroles',session()->get('access_permissions'));
        });

        View::composer('layout.admin.partials.navbar', function ($view) {
            $view->with('categories',  \App\Models\Category::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('users',  \App\Models\User::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('categories',  \App\Models\Category::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('products',  \App\Models\Product::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('users',  \App\Models\User::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('roles',  \App\Models\Role::all());
        });
        View::composer('layout.admin.partials.sidebar', function ($view) {
            $view->with('permissions',  \App\Models\Permission::all());
        });
        View::composer('layout.frontend.partials.header', function ($view) {
            $view->with('categories',  \App\Models\Category::all())
            ->with('configration',  \App\Models\SiteConfigration::first());
        });
    }
}
