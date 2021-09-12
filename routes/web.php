<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('abc', function(){
    return view('layout.test.test');
});



//Route::get('/', function () {
//    return view('master');
//});

Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/loginSubmit', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');

Route::get('/userCreate', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
Route::post('/userCreate', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');

Route::get('/UserEdit/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');
Route::post('/UserUpdate/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
Route::get('/userDelete/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('user.delete');

Route::get('/roleCreate', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('role.create');
Route::post('/roleStore', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('role.store');
Route::get('/role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('role');
Route::get('/RoleEdit/{role}', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('role.edit');
Route::post('/RoleUpdate/{role}', [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('role.update');
Route::get('/RoleDelete/{role}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('role.delete');

Route::get('/permissionCreate', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('permission.create');
Route::post('/permissionStore', [App\Http\Controllers\Admin\PermissionController::class, 'store'])->name('permission.store');
Route::get('/permission', [App\Http\Controllers\Admin\PermissionController::class, 'index'])->name('permission');
Route::get('/permissionEdit/{permission}', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('permission.edit');
Route::post('/permissionUpdate/{permission}', [App\Http\Controllers\Admin\PermissionController::class, 'update'])->name('permission.update');
Route::get('/permissionDelete/{permission}', [App\Http\Controllers\Admin\PermissionController::class, 'destroy'])->name('permission.delete');

Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
Route::get('/categoryCreate', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
Route::post('/categoryStore', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
Route::get('/categoryEdit/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/categoryUpdate/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');

Route::get('/categoryDelete/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.delete');






