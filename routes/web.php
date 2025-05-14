<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\LoginController as AdminLoginControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardControler;



Route::group(['prefix' => 'account'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::get('login',[LoginController::class, 'index'])->name('account.login');
        Route::get('register',[LoginController::class, 'register'])->name('account.register');
        Route::post('process-register',[LoginController::class, 'processRegister'])->name('process-register');
        Route::post('authLogin',[LoginController::class, 'authLogin'])->name('account.authLogin');

    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('account.dashboard');
        Route::get('logout',[LoginController::class, 'logout'])->name('account.logout');
    });
});
Route::group(['prefix' => 'admin'], function() {

    Route::group(['middleware' => 'admin.guest'], function() {
        Route::get('login', [AdminLoginControler::class, 'index'])->name('admin.login');
        Route::post('authLogin', [AdminLoginControler::class, 'authLogin'])->name('admin.authLogin');
    });

    Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('dashboard', [AdminDashboardControler::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginControler::class, 'logout'])->name('admin.logout');
    });
});













