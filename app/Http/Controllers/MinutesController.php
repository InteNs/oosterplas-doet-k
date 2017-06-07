<?php
namespace App\Http\Controllers;

use App\Minutes;
use Request;

class MinutesController extends Controller
{
    public function index()
    {
        if (Request::get('date')) {
            $minutesList = Minutes::where('date', Request::get('date'))->paginate(15);
        } elseif (Request::get('name')) {
            $minutesList = Minutes::where('name', Request::get('name'))->paginate(15);
        } else {
            $minutesList = Minutes::all();
        }

        return view('minutes', ['minutesList' => $minutesList]);
    }
}
