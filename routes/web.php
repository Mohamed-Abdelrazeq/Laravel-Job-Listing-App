<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view(
        'jobs.index',
        [
            'jobs' => Job::with(['employer', 'tags'])->paginate(15),
        ],
    );
});
Route::post('/jobs', function () {
    // Logic to store a new job
    $job = Job::create(request()->all());
    return redirect()->route('jobs.show', ['id' => $job->id]);
})->name('jobs.store');

Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::get('jobs/{id}', function ($id) {
    return view(
        'jobs.show',
        [
            'job' => Job::find($id)
        ],
    );
});



Route::get('/contact', function () {
    return view('contact');
});