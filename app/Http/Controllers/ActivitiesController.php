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
    public function index($id)
    {
        return view('activity', ['activity' => Activity::findOrFail($id)]);
    }
}