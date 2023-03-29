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

Route::get('/', [LoginController::class, 'index'])->name('components.login');
Route::post('/homepage', [UserController::class, 'showHomepage'])->name('homepage');


Route::post('/new-user', [UserController::class, 'createUser']);
Route::post('/new-employee/create', [EmployeeController::class, 'createEmployee']);
Route::post('/new-department/create', [DepartmentController::class, 'createDepartment']);
Route::post('/new-vendor/create', [VendorController::class, 'createVendor']);
