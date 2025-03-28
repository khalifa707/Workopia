<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs = [
        'Software Engineer',
        'Web Developer',
        'Data Scientist',
    ];
    return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs..create');

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

/*Route::get('/posts/{id}', function (string $id) {
    return ('post id: ' . $id);
})->where('id', '[0-9]+');*/

/*Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function (Request $request) {
    return $request->all();
});*/

/*Route::get('test', function () {
    return response('Hello World', 200);
});

Route::get('/not-found', function () {
    return response('Not found', 404);
});*/
