<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategory;
use App\Category;
use App\Http\Controllers\Controller;
use App\Partner;
use Request;

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
    public function store(StoreCategory $request)
    {
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->rank = $request->rank;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($partner);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $partner->save();
        return redirect('beheer/partner');
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
    public function update(StoreCategory $request, $id)
    {
        $partner = Partner::find($id);
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->rank = $request->rank;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($partner);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $partner->save();
        return redirect('beheer/partner');
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
        Category::destroy($id);
        return redirect('/beheer/partner');
    }
}
