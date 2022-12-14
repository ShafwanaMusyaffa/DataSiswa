<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;

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
    return view('pages.home');
});

Route::get('data-siswa', [HomeController::class, 'index']); 

Route::get('kontak', function () {
    return view('pages.contact');
});

// Login & Dashboard
Route::get('dashboard', [UserController::class, 'dashboard']); 
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::resource('siswa', SiswaController::class);