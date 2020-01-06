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

Route::prefix('admin')->name('admin::')->group(function() {

    Route::get('', 'Admin\MainController@index')->name('index');

    Route::prefix('partners')->name('partners::')->group(function() {

        Route::get('', 'Admin\PartnerController@index')->name('index');

        Route::get('add', 'Admin\PartnerController@add')->name('add');
        Route::post('add', 'Admin\PartnerController@postAdd');

        Route::get('{partner}/edit', 'Admin\PartnerController@edit')->name('edit');
        Route::post('{partner}/edit', 'Admin\PartnerController@postEdit');

        Route::delete('{partner}/delete', 'Admin\PartnerController@delete')->name('delete');

    });

});

Route::get('/', 'PageController@index')->name('index');

Route::get('quiz/{partner}', 'PageController@getQuiz')->name('quiz');