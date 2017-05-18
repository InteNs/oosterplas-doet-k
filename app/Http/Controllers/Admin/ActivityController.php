<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreActivity;
use App\Activity;
use App\Http\Controllers\Controller;
use DateTime;
use Session;
use Illuminate\Support\Facades\Input;
use Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Request::get('order') != null && Request::get('direction') != null) {
            $activities = Activity::orderBy(Request::get('order'), Request::get('direction'))->paginate(15);
        } else {
            $activities = Activity::orderBy('id', 'desc')->paginate(15);
        }
        return view('admin.activity.index')->with('activities', $activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity $request)
    {
        $date1 = new DateTime("$request->datetimestart");
        $date2 = new DateTime("$request->datetimeend");

        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;

        if ($date2 <= $date1) {
            Session::flash('message', 'Eindtijd kan niet voor begintijd liggen');
            return redirect('beheer/activiteit/create');
        }

        $activity->datetimestart = $date1;
        $activity->datetimeend = $date2;
        $activity->price = $request->price;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($activity);
            } else {
                Session::flash('message', 'Upload een foto');
                return redirect('beheer/activiteit/create');
            }
        }
        $activity->save();
        return redirect('beheer/activiteit');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return View('admin.activity.show', [
            'activity' => Activity::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity $activity
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('admin.activity.edit', [
            'activity' => Activity::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActivity $request, $id)
    {
        $activity = Activity::find($id);

        $date1 = new DateTime("$request->datetimestart");
        $date2 = new DateTime("$request->datetimeend");

        $activity->title = $request->title;
        $activity->description = $request->description;

        if ($date2 <= $date1) {
            Session::flash('message', 'Eindtijd kan niet voor begintijd liggen');
            return redirect('beheer/activiteit/create');
        }

        $activity->datetimestart = $date1;
        $activity->datetimeend = $date2;
        $activity->price = $request->price;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($activity);
            } else {
                Session::flash('message', 'Upload een foto');
                return redirect('beheer/activiteit/create');
            }
        }
        $activity->save();
        return redirect('beheer/activiteit');
    }

    private function addImage($activity)
    {
        $destinationPath = 'images/uploads';
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = 'activiteit' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;

        # save and link image
        Input::file('image')->move($destinationPath, $fileName);
        $activity->image = '/' . $destinationPath . '/' . $fileName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activity::destroy($id);
        return redirect('/beheer/activiteit');
    }
}
