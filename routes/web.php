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

Route::any('/submit', function () {
    return ('submitted');
});

/*Route::get('/test', function () {
    $url = route('jobs');
    return "<a href='{$url}'>Click here</a>";
});*/
