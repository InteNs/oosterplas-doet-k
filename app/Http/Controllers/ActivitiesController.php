<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Entry;
use App\Report;
use Illuminate\Http\Request;
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
        return view('events', ['activities' => $activities]);
    }

    public function show($id)
    {
        $reports = Activity::where('priority', '=', $id)->get();
        return view('activity', ['activity' => Activity::findOrFail($id)])->with('reports', $reports);
    }

    public function store(Request $request, $id)
    {
        Entry::firstOrCreate([
            'activity_id' => $id,
            'email' => $request->input('email'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone')
        ]);

        return redirect('/activiteiten/'.$id)->with('status', true);
    }
}
