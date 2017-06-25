<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Regulation;
use App\Http\Requests\StoreRegulation;
use Session;
use Request;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::get('order') != null && Request::get('direction') != null) {
            $regulations = Regulation::orderBy(Request::get('order'), Request::get('direction'))->paginate(15);
        } else {
            $regulations = Regulation::orderBy('id', 'asc')->paginate(15);
        }
        return view('admin.regulations.index')->with('regulations', $regulations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regulations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegulation $request)
    {
        $regulation = new Regulation();
        $regulation->date = $request->date;
        $regulation->name = $request->name;

        if ($request->regulation != null) {
            if (Input::file('regulation')->isValid()) {
                $this->addRegulation($regulation);
            } else {
                Session::flash('message', 'Upload de statuten');
                return redirect('beheer/statuten/create');
            }
        }

        $regulation->save();
        return redirect('beheer/statuten');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.regulations.show', ['regulation' => Regulation::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.regulations.edit', ['regulation' => Regulation::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRegulation $request, $id)
    {
        $regulation = Regulation::find($id);
        $regulation->date = $request->date;
        $regulation->name = $request->name;

        if ($request->regulation != null) {
            if (Input::file('regulation')->isValid()) {
                $this->addRegulation($regulation);
            } else {
                Session::flash('message', 'Upload de statuten');
                return redirect('beheer/statuten/edit');
            }
        }
        $regulation->save();
        return redirect('beheer/statuten');
    }

    private function addRegulation($regulation)
    {
        $destinationPath = 'regulations';
        $extension = Input::file('regulation')->getClientOriginalExtension();
        $fileName = $regulation->name . '.' . $extension;

        # save and link minutes
        Input::file('regulation')->move($destinationPath, $fileName);
        $regulation->regulation = '/' . $destinationPath . '/' . $fileName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Regulation::destroy($id);
        return redirect('beheer/statuten');
    }
}
