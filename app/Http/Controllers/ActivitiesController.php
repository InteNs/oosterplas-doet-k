<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    /**
     * Show the page for the given activity.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activity', ['activities' => $activities]);
    }

    public function show($id)
    {
        return view('show', ['activity' => Activity::findOrFail($id)]);
    }
}
