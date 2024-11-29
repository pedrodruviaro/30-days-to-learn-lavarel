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
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3']
    ]);

    // laravel returns In case of validation fail

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

   return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3']
    ]);

    // authorize (On hold...)

    // Update the job
    $job = Job::findOrFail($id); // job == null never happens

    // $job->title = request("title");
    // $job->salary = request("salary");
    // $job->save();

    $job->update([
        'title' => request("title"),
        'salary' => request("salary"),
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function ($id) {
    // authorize (on hold...)

    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view("contact");
});