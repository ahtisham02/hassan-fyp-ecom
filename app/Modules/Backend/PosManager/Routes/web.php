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

Route::group(['prefix' => 'admin', 'as' => 'backend.'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => ['check_permission']], function () {
            Route::get('pos_manager', 'PosController@posManager')->name('pos.pos_manager');
            Route::get('pos_configuration', 'PosController@posConfiguration')->name('pos.pos_configuration');
        });
    });
});
