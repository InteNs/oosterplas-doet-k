<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartner;
use App\Partner;
use Session;
use Illuminate\Support\Facades\Input;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $partners = Partner::paginate(15);
        return view('admin.partner.index')->with('partners', $partners);
    }


    public function indexFront()
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartner $request)
    {
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->rank = $request->rank;
        $partner->link = $request->link;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($partner);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $partner->save();
        return redirect('/beheer/partner');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.edit')->with('partner', $partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StorePartner $request, $id)
    {
        $partner = Partner::find($id);
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->rank = $request->rank;
        $partner->link = $request->link;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($partner);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $partner->save();
        return redirect('/beheer/partner');
    }

    private function addImage($partner)
    {
        $destinationPath = 'images/uploads';
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = 'partner' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;

        # save and link image
        Input::file('image')->move($destinationPath, $fileName);
        $partner->image = '/' . $destinationPath . '/' . $fileName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect('/beheer/partner');
    }
}
