<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('password/confirm', [\App\Http\Controllers\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [\App\Http\Controllers\Auth\ConfirmPasswordController::class, 'confirm']);
Route::post('password/email', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::view('/dx', 'dx');

Route::middleware('auth')->group(function () {

    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/', [\App\Http\Controllers\DemoController::class, 'index']);
    //Route::match(['get', 'post'], '/dashboard', function(){
    //    return view('dashboard');
    //});
    //Route::view('/pages/slick', 'pages.slick');
    //Route::view('/pages/datatables', 'pages.datatables');
    //Route::view('/pages/blank', 'pages.blank');

    Route::prefix('api')->group(function () {
        Route::get('operators', [\App\Http\Controllers\DemoController::class, 'getOperators']);
        Route::get('msn', [\App\Http\Controllers\DemoController::class, 'getMsn']);
        Route::get('data', [\App\Http\Controllers\DemoController::class, 'getData']);
        Route::get('users', [\App\Http\Controllers\DemoController::class, 'getUsers']);

        Route::post('update', [\App\Http\Controllers\DemoController::class, 'update']);
    });

//\Auth::routes();

});
