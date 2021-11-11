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

        Gate::define('view-category',function ($user){
            return in_array('view-category',session()->get('access_permissions'));
        });
        Gate::define('create-category',function ($user){
            return in_array('create-category',session()->get('access_permissions'));
        });
        Gate::define('edit-category',function ($user){
            return in_array('edit-category',session()->get('access_permissions'));
        });
        Gate::define('delete-category',function ($user){
            return in_array('delete-category',session()->get('access_permissions'));
        });

        Gate::define('view-product',function ($user){
            return in_array('view-product',session()->get('access_permissions'));
        });
        Gate::define('create-product',function ($user){
            return in_array('create-product',session()->get('access_permissions'));
        });
        Gate::define('edit-product',function ($user){
            return in_array('edit-product',session()->get('access_permissions'));
        });
        Gate::define('delete-product',function ($user){
            return in_array('delete-product',session()->get('access_permissions'));
        });

        Gate::define('view-slider',function ($user){
            return in_array('view-slider',session()->get('access_permissions'));
        });
        Gate::define('create-slider',function ($user){
            return in_array('create-slider',session()->get('access_permissions'));
        });
        Gate::define('edit-slider',function ($user){
            return in_array('edit-slider',session()->get('access_permissions'));
        });
        Gate::define('delete-slider',function ($user){
            return in_array('delete-slider',session()->get('access_permissions'));
        });

        Gate::define('view-page',function ($user){
            return in_array('view-page',session()->get('access_permissions'));
        });
        Gate::define('create-page',function ($user){
            return in_array('create-page',session()->get('access_permissions'));
        });
        Gate::define('edit-page',function ($user){
            return in_array('edit-page',session()->get('access_permissions'));
        });
        Gate::define('delete-page',function ($user){
            return in_array('delete-page',session()->get('access_permissions'));
        });

        Gate::define('view-user',function ($user){
            return in_array('view-user',session()->get('access_permissions'));
        });
        Gate::define('create-user',function ($user){
            return in_array('create-user',session()->get('access_permissions'));
        });
        Gate::define('edit-user',function ($user){
            return in_array('edit-user',session()->get('access_permissions'));
        });
        Gate::define('delete-user',function ($user){
            return in_array('delete-user',session()->get('access_permissions'));
        });

        Gate::define('view-role',function ($user){
            return in_array('view-role',session()->get('access_permissions'));
        });
        Gate::define('create-role',function ($user){
            return in_array('create-role',session()->get('access_permissions'));
        });
        Gate::define('edit-role',function ($user){
            return in_array('edit-role',session()->get('access_permissions'));
        });
        Gate::define('delete-role',function ($user){
            return in_array('delete-role',session()->get('access_permissions'));
        });


        Gate::define('create-permission',function ($user){
            return in_array('create-permission',session()->get('access_permissions'));
        });
        Gate::define('edit-permission',function ($user){
            return in_array('edit-permission',session()->get('access_permissions'));
        });
        Gate::define('delete-permission',function ($user){
            return in_array('delete-permission',session()->get('access_permissions'));
        });

        Gate::define('manage-userroles',function ($user){
            return in_array('manage-userroles',session()->get('access_permissions'));
        });

        Gate::define('manage-customers',function ($user){
            return in_array('manage-customers',session()->get('access_permissions'));
        });
        Gate::define('manage-admin-dashboard',function ($user){
            return in_array('manage-admin-dashboard',session()->get('access_permissions'));
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
