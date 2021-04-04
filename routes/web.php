<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TenantsController;
use App\Http\Controllers\DomainsController;


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

/*Route::get('/simon', function () {
    return view('test');
});*/

Route::resource('tenant', 'App\Http\Controllers\TenantsController');
Route::resource('domain', 'App\Http\Controllers\DomainsController');
//Route::resource('user', 'App\Http\Controllers\UserController');

//Route::resource('products', 'App\Http\Controllers\ProductsController');

//Route::resource('tenant', TenantsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
