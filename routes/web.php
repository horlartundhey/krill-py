<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);

Route::get('about', [HomeController::class, 'about']);

Route::get('faq', [HomeController::class, 'faq']);

Route::get('contact', [HomeController::class, 'contact']);


// Admin
Route::group(['middleware' => 'admin'], function(){
    
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

Route::get('admin/home', [DashboardController::class, 'admin_home']);

Route::post('admin/home/post', [DashboardController::class, 'admin_home_post']);

Route::get('admin/about', [DashboardController::class, 'admin_about']);

Route::get('admin/faq', [DashboardController::class, 'admin_faq']);

Route::get('admin/contact', [DashboardController::class, 'admin_contact']);




});

// Login route 

Route::get('panel', [AdminController::class, 'login']);

Route::post('panel_admin', [AdminController::class, 'panel_admin']);

Route::get('logout', [AdminController::class, 'logout']);

