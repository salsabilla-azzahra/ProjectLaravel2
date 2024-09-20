<?php

use Illuminate\Http\Request;
use App\Http\Controllers\loginregistercontroller;


Route::get('/', function () {
    return view('home');
});

Route::get('/auth/login', [loginregistercontroller::class, 'login'])
->name('auth.login');

Route::get('/auth/register', [loginregistercontroller::class, 'register'])
->name('auth.register');
