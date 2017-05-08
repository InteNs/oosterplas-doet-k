<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $partnersRank1 = $partners->where('rank', 1);
        $partnersRank1->all();

        $partnersRank2 = $partners->where('rank', 2);
        $partnersRank2->all();

        $partnersRank3 = $partners->where('rank', 3);
        $partnersRank3->all();

        return view('partners', ['partnersRank1' => $partnersRank1,
            'partnersRank2' => $partnersRank2, 'partnersRank3' => $partnersRank3]);
    }
}
