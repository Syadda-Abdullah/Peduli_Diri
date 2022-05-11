<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\perjalanan_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashboard_controller;

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

// Dashboard
Route::get('/home', function () {
    return view('pages.master');
})->name('home');

// Welcome Screen
Route::get('/', function () {
    return view('pages.welcome');
 });

// Input 
Route::get('/input', function () {
    return view('pages.input');
})->name('input');

// Register
Route::get('/register', [user_controller::class, 'halaman_register'])->name('register');
Route::post('/simpanUser', [user_controller::class, 'simpan_register']);

// Login
Route::get('/login', [login_controller::class, 'halaman_login'])->name('login');
Route::post('/postlogin', [login_controller::class, 'Login']);

// Table
Route::post('/simpanInput', [perjalanan_controller::class, 'simpan_perjalanan']);
Route::get('/table', [perjalanan_controller::class,'index'])->name('table');

// Logout
Route::get('/logout', [login_controller::class,'logout'])->name('logout');

// Search
Route::get('/cari_data', [dashboard_controller::class, 'cari_data']);

// Sorting
Route::get('/urut', [perjalanan_controller::class, 'urutkan']);
