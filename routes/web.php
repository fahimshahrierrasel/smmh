<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('brands', 'BrandController')->middleware('auth');
    Route::resource('mobiles', 'MobileController')->middleware('auth');
    Route::resource('employees', 'EmployeeController')->middleware('auth');
    Route::resource('locations', 'LocationController')->middleware('auth');
    Route::resource('stocks', 'StockController')->middleware('auth');
    Route::get('get-mobile/{code}', 'MobileController@getMobile')->middleware('auth');
});
