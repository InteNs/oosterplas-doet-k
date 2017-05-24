<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Partner;
use App\Sponsor;

class CompanyController extends Controller
{
    public function index()
    {
        $sponsor = Sponsor::all();
        $sponsorRank1 = $sponsor->where('rank', 1);
        $sponsorRank1->all();

        $sponsorRank2 = $sponsor->where('rank', 2);
        $sponsorRank2->all();

        $sponsorRank3 = $sponsor->where('rank', 3);
        $sponsorRank3->all();

        $partners = Partner::all();


        return view('bedrijven', ['sponsorRank1' => $sponsorRank1,
            'sponsorRank2' => $sponsorRank2, 'sponsorRank3' => $sponsorRank3, 'partners' => $partners]);
    }
}
