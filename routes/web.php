<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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

