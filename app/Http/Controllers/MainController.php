<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Slider;
use Carbon\Carbon;

class MainController extends Controller
{
    public function index()
    {
        $last_activities = Activity::orderBy('sorting_date', 'asc')->take(3)->get();
        return view('index')->with('slider', Slider::find(1))->with('activities', $last_activities);
    }
}
