<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/public',[\App\Http\Controllers\ChannelController::class, 'index']);
