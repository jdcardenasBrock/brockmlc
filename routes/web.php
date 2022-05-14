<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReferencesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Role;
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
    return view('auth.login');
})->name('welcome');


Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('references', ReferencesController::class);
    Route::get('datatable', [App\Http\Controllers\ReferencesController::class, 'anyData'])->name('datatables.data');
    Route::resource('permissions', PermissionController::class);
    Route::get('PermissionsData', [App\Http\Controllers\PermissionController::class, 'anyData'])->name('permissions.data');
    Route::resource('roles', RoleController::class);
    Route::get('RollesData', [App\Http\Controllers\RoleController::class, 'anyData'])->name('roles.data');
    Route::resource('users', UserController::class);
    Route::get('UserData', [App\Http\Controllers\UserController::class, 'anyData'])->name('users.data');
    Route::get('references/assign/{id}', [App\Http\Controllers\ReferencesController::class, 'AssignID']);
});
