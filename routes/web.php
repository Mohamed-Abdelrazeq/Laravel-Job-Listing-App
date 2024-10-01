<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view(
        'job-listings',
        [
            'jobs' => Job::with(['employer', 'tags'])->paginate(15),
        ],
    );
});

Route::get('jobs/{id}', function ($id) {
    return view(
        'job',
        [
            'job' => Job::find($id)
        ],
    );
});

Route::get('/contact', function () {
    return view('contact');
});