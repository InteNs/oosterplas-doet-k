<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJob;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $jobs = Job::paginate(15);
        return view('admin.job.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJob $request)
    {
        $job = new Job();
        $job->name = $request->name;
        $job->description = $request->description;
        $job->places = $request->places;
        $job->online = $request->online;

        $job->save();
        return redirect('/beheer/job');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('admin.job.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('admin.job.edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJob $request, $id)
    {
        $job = Job::find($id);
        $job->name = $request->name;
        $job->description = $request->description;
        $job->places = $request->places;
        $job->online = $request->online;

        $job->save();
        return redirect('/beheer/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::destroy($id);
        return redirect('/beheer/job');
    }
}
