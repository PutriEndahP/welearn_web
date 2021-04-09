<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoalController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [LandingController::class,'index']);
Auth::routes();

Route::get('/home', [HomeController::class,'show']);
Auth::routes();

Route::get('/user', [UserController::class,'showUser']);
Auth::routes();

Route::get('/view_user', [UserController::class,'viewUser']);
Auth::routes();

Route::get('/dashboard', [DashboardController::class,'showDashboard']);
Auth::routes();

Route::get('/soal_huruf', [SoalController::class,'showSoalHuruf']);
Auth::routes();

Route::get('/add_soal_huruf', [SoalController::class,'addSoalHuruf']);
Auth::routes();

Route::post('/storeSoalHuruf', [SoalController::class,'storeSoalHuruf']);
Auth::routes();

Route::get('/soal_angka', [SoalController::class,'showSoalAngka']);
Auth::routes();

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', 'HomeController@show')->middleware('auth');

