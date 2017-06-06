<?php

namespace App\Http\Controllers;

use App\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::where('online', 1)->get();

        return view('job', ['jobs' => $jobs]);
    }
}
