<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;

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
//     return view('dashboard');
// });

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard')->Middleware('isLoggedIn');


Route::get('/login',[AuthController::class ,'Login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login-user',[AuthController::class ,'LoginUser'])->name('LoginUser');
Route::get('/registration',[AuthController::class ,'Registion'])->middleware('alreadyLoggedIn');
Route::post('/registr/user',[AuthController::class ,'userRegister'])->name('registerUser');
Route::get('/logout',[DashboardController::class ,'Logout'])->name('logout');