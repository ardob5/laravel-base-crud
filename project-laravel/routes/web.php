<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'CagnoliniController@index')->name('home');
Route::get('/stampaCane/{id}' , 'CagnoliniController@show_dog')->name('stampaCane');
