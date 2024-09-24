<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teams');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/schedule', function () {
    return view('schedule');
});