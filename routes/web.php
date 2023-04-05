<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserManagerController;


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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'super-admin'])->group(function () {
    Route::get('/user-manager', [UserManagerController::class, 'index'])->name('user-manager.index');
    Route::post('/user-manager', [UserManagerController::class, 'store'])->name('user-manager.store');
    Route::get('/user-manager/{email}', [UserManagerController::class, 'edit'])->name('user-manager.edit');
    Route::post('/user-manager/{id}', [UserManagerController::class, 'update'])->name('user-manager.update');
    Route::post('user-manager/destroy/{id}', [UserManagerController::class, 'destroy'])->name('user-manager.destroy');
});
