<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Partner;
use App\Sponsor;

class CompanyController extends Controller
{
    public function index()
    {
        $sponsorRank1 = Sponsor::where('rank', 1);

        $sponsorRank2 = Sponsor::where('rank', 2);

        $sponsorRank3 = Sponsor::where('rank', 3);

        $partners = Partner::all();

        return view('bedrijven', ['sponsorRank1' => $sponsorRank1,
            'sponsorRank2' => $sponsorRank2, 'sponsorRank3' => $sponsorRank3, 'partners' => $partners]);
    }
}
