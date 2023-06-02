<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboadController::class, 'index'])->name('dashboard');
Route::get('/about', [App\Http\Controllers\DashboadController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\DashboadController::class, 'contact'])->name('contact');
