<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;


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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    
Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('students')->group(function () {
        Route::get('/', [StudentsController::class, 'index'])->name('students');
        Route::get('/new', [StudentsController::class, 'view_new'])->name('newStudent');
        Route::post('/new', [StudentsController::class, 'new_student'])->name('addNewStudent');
        Route::get('/{id}', [StudentsController::class, 'view_profile'])->name('profile');
        Route::get('/update/{id}', [StudentsController::class, 'view_update'])->name('updateStudent');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users');
        Route::get('/new', [UsersController::class, 'view_new'])->name('newUser');
        Route::post('/new', [UsersController::class, 'add_user'])->name('addNewUser');
        Route::get('/update/{id}', [UsersController::class, 'view_update'])->name('updateUser');
        Route::get('/delete/{id}', [UsersController::class, 'delete_user'])->name('deleteUser');
        
    });
});

