<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSponsor;
use App\Sponsor;
use Session;
use Illuminate\Support\Facades\Input;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $sponsors = Sponsor::paginate(15);
        return view('admin.sponsor.index')->with('sponsors', $sponsors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponsor.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSponsor $request)
    {
        $sponsor = new Sponsor();
        $sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->rank = $request->rank;
        $sponsor->link = $request->link;
        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($sponsor);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/sponsor/create');
            }
        }
        $sponsor->save();
        return redirect('/beheer/sponsor');
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $sponsor = Sponsor::find($id);
        return view('admin.sponsor.show')->with('sponsor', $sponsor);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);
        return view('admin.sponsor.edit')->with('sponsor', $sponsor);
    }
    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSponsor $request, $id)
    {
        $sponsor = Sponsor::find($id);
        $sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->rank = $request->rank;
        $sponsor->link = $request->link;
        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($sponsor);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/sponsor/create');
            }
        }
        $sponsor->save();
        return redirect('/beheer/sponsor');
    }
    private function addImage($sponsor)
    {
        $destinationPath = 'images/uploads';
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = 'sponsor' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;
        # save and link image
        Input::file('image')->move($destinationPath, $fileName);
        $sponsor->image = '/' . $destinationPath . '/' . $fileName;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sponsor::destroy($id);
        return redirect('/beheer/sponsor');
    }
}
