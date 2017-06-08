<?php

namespace App\Http\Controllers;

use App\Regulation;
use Request;

class RegulationController extends Controller
{
    public function index()
    {
        if (Request::get('date')) {
            $regulations = Regulation::where('date', 'like', '%' . Request::get('date') . '%')->paginate();
        } elseif (Request::get('name')) {
            $regulations = Regulation::where('name', 'like', '%' . Request::get('name') . '%')->paginate();
        } else {
            $regulations = Regulation::all();
        }

        return view('regulations', ['regulations' => $regulations]);
    }
}
