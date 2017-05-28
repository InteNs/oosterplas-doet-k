<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Slider;
use Carbon\Carbon;

class MainController extends Controller
{
    public function index()
    {
        $last_activities = $this->getLastThreeActivities(Activity::orderBy('datetimestart', 'asc')->get());
        return view('index')->with('slider', Slider::find(1))->with('activities', $last_activities);
    }

    private function getLastThreeActivities($activities)
    {
        foreach ($activities as $activity) {
            if (count($activities) <= 3) {
                return $activities;
            }
                $start = $activity->datetimestart;
            if ($start <= Carbon::now()) {
                $activities->shift();
                continue;
            }
        }
        return $activities;
    }
}
