<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(5);
    // $jobs = Job::with('employer')->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(5); -> usado em infite scrolling, por exemplo e bases maiores de dados

    return view('jobs', [
        'jobs' =>  $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

   return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view("contact");
});