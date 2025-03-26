<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return ('available jobs');
});

Route::post('/submit', function () {
    return ('submitted');
});
