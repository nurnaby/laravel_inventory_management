<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgamiController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoustomerController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard')->Middleware('isLoggedIn');
Route::middleware('isLoggedIn')->group(function () {
    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/admin-profile',[AdminController::class,'AdminProfile'])->name('adminProfile');
    Route::get('/admin-change-password',[AdminController::class,'AdminChangePassword'])->name('adminChangePassword');
    Route::post('/admin-password-update',[AdminController::class,'AdminPasswordUpdate'])->name('UpdatePassword');

    Route::post('/admin-update',[AdminController::class,'AdminUpdate'])->name('updateAdmin');
    
    Route::controller(EmployeController::class)->group(function(){
        Route::get('/employes','AllEmploye')->name('allEmploye');
        Route::get('/add-employe','AddEmploye')->name('addEmploye');
        Route::post('/store-employe','StoreEmploye')->name('storeEmploye');
        Route::get('/edit-employe','EditEmploye')->name('editEmploye');
        Route::post('/update-employe','UpdateEmploye')->name('update.Employe');
    });
    Route::get('/employes',[EmployeController::class,'AllEmploye'])->name('allEmploye');

// coustomer all route
    Route::controller(CoustomerController::class)->group(function(){
        Route::get('/customer','AllCustomer')->name('all.customer');
        Route::get('/customer-add','AddCustomer')->name('add.customer');
        Route::post('/customer-store','StoreCustomer')->name('store.customer');
        Route::get('/edit-customer/{id}','EditCustomer')->name('edit.customer');
        Route::post('/update-employe','UpdateEmploye')->name('update.Employe');
    });
    // Category all route
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category','AllCategory')->name('all.Category');
        Route::get('/category-add','AddCategory')->name('add.category');
        Route::post('/category-store','StoreCategory')->name('store.category');
        Route::get('/edit-category/{id}','EditCategory')->name('edit.category');
        Route::post('/update-category','UpdateCategory')->name('update.category');
    });
    
// Agami all route
    Route::controller(AgamiController::class)->group(function(){
        Route::get('/agami','AllAgamiProduct')->name('all.agami_product');
        Route::get('/agami/add-sale','AddAgamiProduct')->name('agami.add-product');
        Route::post('/agami/store','StoreAgamiProduct')->name('store.agami_product');
        Route::get('/agami/today-sale','TodayAgamiSale')->name('today.sale');
        Route::get('/agami/this/month-sale','ThisMonthAgamiSale')->name('thismonth.sale');
        Route::get('/agami/yearly-sale','YearlyAgamiSale')->name('yearly.sale');
        Route::get('/agami/january-sale','JanuaryAgamiSale')->name('january.sale');
        Route::get('/agami/june-sale','JuneAgamiSale')->name('june.sale');
        Route::get('/agami/july-sale','JulyAgamiSale')->name('july.sale');
        Route::get('/agami/august-sale','AugustAgamiSale')->name('august.sale');
        Route::get('/agami/september-sale','SeptemberAgamiSale')->name('september.sale');
        Route::get('/agami/october-sale','OctoberAgamiSale')->name('october.sale');
        Route::get('/agami/november-sale','NovemberAgamiSale')->name('november.sale');
        Route::get('/agami/december-sale','DecemberAgamiSale')->name('december.sale');
        Route::get('/edit-agami-sale/{id}','EditAgamiSale')->name('edit.agamiSale');
        Route::post('/update-agami-sale','UpdateAgameiSale')->name('update.agamiSale');
    });


    
});


Route::get('/login',[AuthController::class ,'Login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login-user',[AuthController::class ,'LoginUser'])->name('LoginUser');
Route::get('/registration',[AuthController::class ,'Registion'])->middleware('alreadyLoggedIn');
Route::post('/registr/user',[AuthController::class ,'userRegister'])->name('registerUser');
Route::get('/logout',[DashboardController::class ,'Logout'])->name('logout');

// admin_email:admin4@gmail.com
// password:123456789 