<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return ('available jobs');
})->name('jobs');

/*Route::post('/submit', function () {
    return ('submitted');
});

Route::any('/submit', function () {
    return ('submitted');
});*/

/*Route::get('/test', function () {
    $url = route('jobs');
    return "<a href='{$url}'>Click here</a>";
});*/

Route::get('/posts/{id}', function (string $id) {
    return ('post id: ' . $id);
})->where('id', '[0-9]+');
