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

Route::get('/login', [UserController::class, 'login'])->middleware('auth');
Route::get('/', [UserController::class, 'login'])->name('login')->middleware('mustUpdatePassword');
Route::post('/', [UserController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('/homepage', [UserController::class, 'showHomepage'])->name('homepage')->middleware(['mustLogIn', 'mustUpdatePassword']);
Route::get('/homepage', [UserController::class, 'showHomepage'])->middleware(['mustUpdatePassword']);
Route::post('/signout', [UserController::class, 'signout'])->name('signout')->middleware('auth');
Route::get('/signout', [UserController::class, 'signout'])->middleware('guest');
Route::get('/update-password', [UserController::class, 'updatePassword'])->name('updatePassword')->middleware('auth');
Route::post('/create-password', [UserController::class, 'createPassword'])->name('createPassword')->middleware('auth');

Route::post('/new-user', [UserController::class, 'createUser']);
Route::post('/new-employee/create', [EmployeeController::class, 'createEmployee']);
Route::post('/new-department/create', [DepartmentController::class, 'createDepartment']);
Route::post('/new-vendor/create', [VendorController::class, 'createVendor']);
