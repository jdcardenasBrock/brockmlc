<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReferencesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Spatie\Permission\Traits\HasRoles;


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


/*
|--------------------------------------------------------------------------
| Incio de rutas para la pagina web
|--------------------------------------------------------------------------
|
*/


Route::get('/', function () {
    return view('webpage.index');
})->name('index');

Route::get('/our_mission', function () {
    return view('webpage.our_mission');
})->name('our_mission');

Route::get('/national_presence', function () {
    return view('webpage.national_presence');
})->name('national_presence');

Route::get('/news', function () {
    return view('webpage.news');
})->name('news');

Route::get('/sitework', function () {
    return view('webpage.sitework');
})->name('sitework');

Route::get('/building', function () {
    return view('webpage.building');
})->name('building');

Route::get('/restoration', function () {
    return view('webpage.restoration');
})->name('restoration');

Route::get('/become_a_vendor', function () {
    return view('webpage.become_a_vendor');
})->name('become_a_vendor');

Route::get('/career_opportunities', function () {
    return view('webpage.career_opportunities');
})->name('career_opportunities');

Route::get('/contact', function () {
    return view('webpage.contact');
})->name('contact');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| Incio de rutas para el aplicativo web
|--------------------------------------------------------------------------
|
*/
Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('proHound',[App\Http\Controllers\HomeController::class,'prohund'])->name('proHound');
    Route::resource('permissions', PermissionController::class);
    Route::get('PermissionsData', [App\Http\Controllers\PermissionController::class, 'anyData'])->name('permissions.data');
    Route::resource('roles', RoleController::class);
    Route::get('RollesData', [App\Http\Controllers\RoleController::class, 'anyData'])->name('roles.data');

    Route::resource('users', UserController::class);
    Route::get('UserData', [App\Http\Controllers\UserController::class, 'anyData'])->name('users.data');


    Route::resource('project', ProjectsController::class);
    Route::get('datatableProject', [App\Http\Controllers\ProjectsController::class, 'GetData'])->name('Projects.data');

    Route::post('project_phases',[App\Http\Controllers\ProjectsController::class, 'MakePhases']);
    Route::get('fill_project_phases/{id}', [App\Http\Controllers\ProjectsController::class, 'fill_project_phases'])->name('fill_project_phases.data');
    Route::get('fill_project_floorplan/{id}', [App\Http\Controllers\ProjectsController::class, 'fill_project_floorplan'])->name('fill_project_floorplan.data');

    Route::post('project_floorplan',[App\Http\Controllers\ProjectsController::class, 'UploadFloorplans']);

    Route::get('project_showData/{id}', [App\Http\Controllers\HomeController::class, 'GetData'])->name('project_showData');

    // Resources para el modulo de clientes
    Route::resource('clients', ClientsController::class);
    Route::get('datatableClients', [App\Http\Controllers\ClientsController::class, 'GetData'])->name('Clients.data');

    Route::get('ajax/request/showClients', function () {
        return false;
    })->name('ajax.ruta.showClients');
    
 
});
