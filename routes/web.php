<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(5);
    // $jobs = Job::with('employer')->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(5); -> usado em infite scrolling, por exemplo e bases maiores de dados

    return view('jobs.index', [
        'jobs' =>  $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

   return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    // validation

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view("contact");
});