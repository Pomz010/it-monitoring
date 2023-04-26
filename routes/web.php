<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HardwareCategoryController;

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
// User Authentication Routes
Route::get('/', [UserController::class, 'show']);
Route::post('/', [UserController::class, 'show'])->name('login')->middleware(['mustLogIn', 'mustUpdatePassword']);
Route::match(['get', 'post'],'/signout', [UserController::class, 'destroy'])->name('signout');
Route::get('/create-password', [UserController::class, 'create'])->middleware(['auth']);
Route::match(['get', 'put', 'post'], '/update-password', [UserController::class, 'update'])->name('updatePassword')->middleware('auth');

// Add new user routes
Route::post('/create-employee', [EmployeeController::class, 'store']);

// Add new hardware routes
Route::post('/create-hardware', [HardwareController::class, 'store']);

// Add new department routes
Route::post('/create-department', [DepartmentController::class, 'store']);

// Add new software routes
Route::post('/create-software', [SoftwareController::class, 'store']);

// Add new software routes
Route::post('/create-toner', [TonerController::class, 'store']);

// Display Laptop Modal Form
Route::get('/create-laptop', [HardwareController::class, 'showLaptop'])->name('showLaptop');

