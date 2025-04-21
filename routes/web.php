<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;
use Illuminate\Support\Arr;




Route::get('/', function () {
    return view('dashboards.admin');
});

Route::get('/about', function () {
    return view('employee');
});

Route::get('/service', function () {
    return view('service' );
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//for the jobs page
Route::post('/jobs', function () {
    //dd(request()->all());
    //Validation
    request()->validate([
        'title' => ['required'],
        'salary' => ['required']
    ]);
    job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' =>  1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs', function () {
    $jobs = job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [

        'jobs' => $jobs

    ]);
});




Route::get('/jobs/{id}', function ($id) {

    $job = Arr::first(job::all(), fn($job) => $job['id'] = $id);

    return view('jobs.show', ['job' => $job]);

    if(!$job){
        abort(404);
    }

});

