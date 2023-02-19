<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('dashboard');
});
Route::get('/login',[AuthController::class ,'Login']);
Route::get('/registration',[AuthController::class ,'Registion']);
Route::post('/registr/user',[AuthController::class ,'userRegister'])->name('registerUser');