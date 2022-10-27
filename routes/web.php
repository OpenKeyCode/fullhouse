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

Auth::routes();

Route::group(['namespace' => 'Back', 'prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'DashboardController')->name('dashboard');
    Route::resource('users', 'UserController')->names('admin.users');
    Route::resource('product_categories', 'ProductCategoryController')->names('admin.product_categories');
    Route::resource('rooms', 'RoomController')->names('admin.rooms');
    Route::resource('deliveries', 'DeliveryController')->names('admin.deliveries');
    Route::resource('products', 'ProductController')->names('admin.products');
    Route::resource('banners', 'BannerController')->names('admin.banners');
    Route::resource('setting', 'SettingController')->only(['index', 'update'])->names('admin.setting');
});

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('users', 'UserController@index')->name('user');
});
