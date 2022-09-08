<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['namespace' => 'Back', 'prefix' => 'admin', 'middleware' => 'auth, admin'], function () {
    Route::resource('users', 'UserController');
});
Route::group(['namespace' => 'Front'], function () {
    Route::resource('users', 'UserController');
});
