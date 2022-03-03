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
Route::get('properties', [PropertyController::class, 'index']);
Route::get('properties/create', [PropertyController::class, 'create'])->middleware('auth');
Route::post('properties/create', [PropertyController::class, 'store'])->middleware('auth');
Route::get('properties/{property:id}', [PropertyController::class, 'show']);
Route::get('properties/{property}/edit', [PropertyController::class, 'edit'])->middleware('auth');
Route::patch('properties/{property}/edit', [PropertyController::class, 'update'])->middleware('auth');
Route::delete('properties/{property}/edit', [PropertyController::class, 'destroy'])->middleware('auth');

//tenants
Route::get('/tenants', [TenantController::class, 'index'])->middleware('auth');
Route::get('tenants/create', [TenantController::class, 'create'])->middleware('auth');
Route::post('tenants/create', [TenantController::class, 'store'])->middleware('auth');
Route::get('tenants/{tenant}/edit', [TenantController::class, 'edit'])->middleware('auth');
Route::patch('tenants/{tenant}/edit', [TenantController::class, 'update'])->middleware('auth');
Route::delete('tenants/{tenant}/edit', [TenantController::class, 'destroy'])->middleware('auth');

//Tenancy
Route::get('/tenancies', [TenancyController::class, 'index'])->middleware('auth');
Route::get('/tenancies/{property}/create', [TenancyController::class, 'create'])->middleware('auth');
Route::post('/tenancies/{property}/create', [TenancyController::class, 'store'])->middleware('auth');
