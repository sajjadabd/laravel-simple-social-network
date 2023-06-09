<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;



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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/login', [UserController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/register', [UserController::class, 'registerationPage'])->name('registerationPage');
Route::post('/register', [UserController::class, 'register'])->name('register');
