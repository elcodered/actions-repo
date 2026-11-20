<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/versi', function () {
    return response()->json(['version' => '1.0.0']);
});
