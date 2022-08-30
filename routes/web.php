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

// Example Routes
Route::view('/', 'landing');
Route::get('/home', [\App\Http\Controllers\DemoController::class, 'index']);
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::prefix('api')->group(function () {
    Route::get('operators', [\App\Http\Controllers\DemoController::class, 'getOperators']);
    Route::get('msn', [\App\Http\Controllers\DemoController::class, 'getMsn']);
    Route::get('data', [\App\Http\Controllers\DemoController::class, 'getData']);
});
