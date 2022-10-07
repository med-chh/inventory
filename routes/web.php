<?php

use App\Http\Controllers\LogController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', CategoryController::class, ['except' => ['show']]);

Route::resource('product', ProductController::class);

Route::resource('user', UserController::class);

Route::resource('role', RoleController::class);

Route::get('logs', [LogController::class, 'index'])->name('logs.index');

