<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SirvicesController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/edh', function () {
    return view('edithome');
});

Route::post('/homedata', [SirvicesController::class, 'homedata']);
Route::get('/home', [SirvicesController::class, 'homeview']);
