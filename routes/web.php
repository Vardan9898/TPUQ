<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TenancyController;
use App\Http\Controllers\TenantController;
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
//register
Route::get('/', [RegisterController::class, 'index'])->middleware('guest')->name('home');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//session
Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//properties
Route::group(['middleware' => ['auth']], function () {
    Route::get('properties/create', [PropertyController::class, 'create']);
    Route::post('properties/create', [PropertyController::class, 'store']);
    Route::get('properties/{property}/edit', [PropertyController::class, 'edit']);
    Route::patch('properties/{property}/edit', [PropertyController::class, 'update']);
    Route::delete('properties/{property}/edit', [PropertyController::class, 'destroy']);
});
Route::get('properties', [PropertyController::class, 'index']);
Route::get('properties/{property:id}', [PropertyController::class, 'show']);

//tenants
Route::group(['middleware' => ['auth']], function () {
    Route::get('/tenants', [TenantController::class, 'index']);
    Route::get('tenants/create', [TenantController::class, 'create']);
    Route::post('tenants/create', [TenantController::class, 'store']);
    Route::get('tenants/{tenant}/edit', [TenantController::class, 'edit']);
    Route::patch('tenants/{tenant}/edit', [TenantController::class, 'update']);
    Route::delete('tenants/{tenant}/edit', [TenantController::class, 'destroy']);
});

//Tenancy
Route::group(['middleware' => ['auth']], function () {
    Route::get('/tenancies', [TenancyController::class, 'index']);
    Route::get('/tenancies/{property}/create', [TenancyController::class, 'create']);
    Route::post('/tenancies/{property}/create', [TenancyController::class, 'store']);
    Route::delete('/tenancies/{tenancy}/delete', [TenancyController::class, 'destroy']);
    Route::get('/tenancies/{tenancy}/edit', [TenancyController::class, 'edit']);
    Route::patch('/tenancies/{tenancy}/edit', [TenancyController::class, 'update']);
    Route::delete('/tenancies/{tenancy}', [TenancyController::class, 'destroy']);
});

