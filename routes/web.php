<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View\LoginController as ViewLoginController;
use App\Http\Controllers\Session\SessionController;
use App\Http\Controllers\Session\LoginController as SessionLoginController;
use App\Http\Controllers\Session\LogoutController;

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
    // return view('welcome');
    return view('test');
})->middleware('auth');

Route::get('/login', ViewLoginController::class)
    ->name('login'); //guest middleware for redirect if user log in 
Route::post('/login', SessionLoginController::class);
Route::post('/logout', LogoutController::class);