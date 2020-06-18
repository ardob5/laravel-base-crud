<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'OminiController@index')->name('home');
Route::get('/show_omino/{id}', 'OminiController@show')->name('show');
Route::get('/delete_omino/{id}', 'OminiController@delete')->name('delete');
Route::get('/create', 'OminiController@create')->name('create');
Route::post('/store', 'OminiController@store')->name('store');
Route::get('/edit/{id}', 'OminiController@edit')->name('edit');
Route::post('/update/{id}', 'OminiController@update')->name('update');
