<?php
namespace App\Http\Controllers;

use App\Minutes;
use Request;

class MinutesController extends Controller
{
    public function index()
    {
        if (Request::get('date')) {
            $minutesList = Minutes::where('date', 'like', '%' . Request::get('date') . '%')->paginate();
        } elseif (Request::get('name')) {
            $minutesList = Minutes::where('name', 'like', '%' . Request::get('name') . '%')->paginate();
        } else {
            $minutesList = Minutes::all();
        }

        return view('minutes', ['minutesList' => $minutesList]);
    }
}
