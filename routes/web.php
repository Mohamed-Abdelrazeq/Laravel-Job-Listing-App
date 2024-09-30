<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('job-listings');
});

Route::get('jobs/{id}', function ($id) {
    return view('job', [
        'job' => 'engineer',
        'id' => '1'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});