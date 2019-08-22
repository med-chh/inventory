<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('product','ProductController');

Route::resource('user','UserController');

Route::resource('group','GroupController');