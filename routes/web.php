<?php

use App\Http\Controllers\LogController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', CategoryController::class, ['except' => ['show']]);

Route::resource('product', ProductController::class);

Route::resource('user', UserController::class);

Route::resource('role', RoleController::class);

Route::get('logs', [LogController::class, 'index'])->name('logs.index');