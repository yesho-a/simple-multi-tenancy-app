<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    /*Route::get('/', function () {
      dd(\App\Models\User::all());*/
       // return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
            //Auth::routes();
       Route::resource('user', 'App\Http\Controllers\UserController');
       Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

       //Route::resource('user', 'App\Http\Controllers\UserController');
      // Auth::routes();



    });
