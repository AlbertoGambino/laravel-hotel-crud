<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')
    -> name('home');

Route::get('employee/{id}', 'MainController@show')
    -> name('show');

Route::get('new/employee', 'MainController@create')
    -> name('create');

Route::post('store/employee', 'MainController@store')
    -> name('store');


Route::get('edit/employee/{id}', 'MainController@edit')
    -> name('edit');

Route::post('update/employee/{id}', 'MainController@update' )
    -> name('update');

Route::get('destroy/{id}', 'MainController@destroy')
    -> name('destroy');
