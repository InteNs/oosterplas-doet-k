<?php

namespace App\Http\Controllers;

use App\Activity;
use App\EventModel;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class CalendarController extends Controller
{
    public function calendar(){

        $eloquentEvent = Activity::all(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        $calendar = Calendar::addEvents($eloquentEvent, [ //set custom color for this event
            'color' => '#800',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'eventRender' => 'tooltip',
            'eventClick' => 'redirect',
        ]);

        return view('calendar', ['calendar'=>$calendar]);
    }
}
