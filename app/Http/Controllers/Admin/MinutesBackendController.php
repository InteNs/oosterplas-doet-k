<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreMinutes;
use App\Minutes;
use Illuminate\Support\Facades\Input;
use Session;
use Request;
use App\Http\Controllers\Controller;

class MinutesBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Request::get('order') != null && Request::get('direction') != null) {
            $minutes = Minutes::orderBy(Request::get('order'), Request::get('direction'))->paginate(15);
        } else {
            $minutes = Minutes::orderBy('id', 'asc')->paginate(15);
        }
        return view('admin.minutes.index')->with('minutes', $minutes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.minutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMinutes $request)
    {
        $minutes = new Minutes();
        $minutes->date = $request->date;

        if ($request->minutes != null) {
            if (Input::file('minutes')->isValid()) {
                $this->addMinutes($minutes);
            } else {
                Session::flash('message', 'Upload de notulen');
                return redirect('beheer/notulen/create');
            }
        }

        $minutes->save();
        return redirect('beheer/notulen');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return View('admin.minutes.show', ['minutes' => Minutes::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('admin.minutes.edit', ['minutes' => Minutes::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMinutes $request, $id)
    {
        $minutes = Minutes::find($id);
        $minutes->date = $request->date;

        if ($request->minutes != null) {
            if (Input::file('minutes')->isValid()) {
                $this->addMinutes($minutes);
            } else {
                Session::flash('message', 'Upload de notulen');
                return redirect('beheer/notulen/edit');
            }
        }
        $minutes->save();
        return redirect('beheer/notulen');
    }

    private function addMinutes($minutes)
    {
        $destinationPath = 'minutes';
        $extension = Input::file('minutes')->getClientOriginalExtension();
        $fileName = 'notulen' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;

        # save and link minutes
        Input::file('minutes')->move($destinationPath, $fileName);
        $minutes->minutes = '/' . $destinationPath . '/' . $fileName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Minutes::destroy($id);
        return redirect('beheer/notulen');
    }
}
