<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', [App\Http\Controllers\DashboadController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboadController::class, 'index'])->name('dashboard');
Route::get('/about', [App\Http\Controllers\DashboadController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\DashboadController::class, 'contact'])->name('contact');
// web.php

Route::post('/contact', [ContactController::class, 'submit'])->name('contact-post');
<<<<<<< HEAD
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::post('/data', [WelcomeController::class, 'store']);
=======
>>>>>>> 92d823f9512e06acf3b2229a0426abad57e72ae4
