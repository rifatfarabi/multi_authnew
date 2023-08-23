<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/login', [AdminController::class,'adminLoginForm'])->name('admin.login.form');
Route::post('admin-login', [AdminController::class,'adminLogin'])->name('admin.login');
Route::get('admin/dashboard', [AdminController::class,'adminDashboard'])->name('admin.dashboard');
