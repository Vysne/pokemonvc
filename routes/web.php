<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExpansionsController;
use App\Http\Controllers\LoginController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomepageController::class, 'getHomePageLayout']);

Route::get('login', [LoginController::class, 'getLoginPage']);

Route::get('expansions', [ExpansionsController::class, 'index'])->name('expansions');

Route::get('expansions/{set_id}', [ExpansionsController::class, 'show'])->name('selected_expansion');

/* Login&Register routes */
Route::post('custom-register', [HomepageController::class, 'customRegister']);

Route::post('custom-login', [LoginController::class, 'customLogin']);

Route::get('signout', [LoginController::class, 'signOut']);

/* Authenticated user routes */
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
