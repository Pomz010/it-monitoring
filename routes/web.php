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

// Route::get('/', [LoginController::class, 'index'])->name('components.login');
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/', [UserController::class, 'login'])->name('login')->middleware(['guest', 'mustUpdatePassword']);
Route::post('/homepage', [UserController::class, 'showHomepage'])->name('homepage')->middleware(['guest', 'mustUpdatePassword']);
Route::get('/homepage', [UserController::class, 'showHomepage'])->middleware(['guest', 'mustUpdatePassword']);
Route::post('/signout', [UserController::class, 'signout'])->name('signout')->middleware('auth');
Route::get('/signout', [UserController::class, 'signout'])->middleware('guest');
Route::get('/password/update', [UserController::class, 'updatePassword'])->name('updatePasword')->middleware('auth');


Route::post('/new-user', [UserController::class, 'createUser']);
Route::post('/new-employee/create', [EmployeeController::class, 'createEmployee']);
Route::post('/new-department/create', [DepartmentController::class, 'createDepartment']);
Route::post('/new-vendor/create', [VendorController::class, 'createVendor']);
