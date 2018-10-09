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
Route::resource ('/ ', 'HomeController');
Route::get('/mkgarage', 'HomeController@index')->name('mkgarage');

Auth::routes();
Route::post('/contact',  'NotificationController@sendMessage');
Route::post('/motbookings',  'NotificationController@bookMOT');  
Route::post('/tyresearch', 'HomeController@searchTyre');
Route::resource ('/tyres', 'TyreController');
Route::get('/home', 'TyreController@index')->name('home');
Route::get('/tyresbrand', function () {
    return view('tyres.brand');
});
Route::get('/tyreswidth', function () {
    return view('tyres.width');
});
Route::prefix('api')->group(function() {
    Route::resource('tbrands', 'TbrandController');
    Route::resource('twidths', 'TwidthController');
});