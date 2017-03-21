<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreActivity;
use View;
use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Input;
use Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::get('order') != null && Request::get('direction') != null) {
            $activities = Activity::orderBy(Request::get('order'), Request::get('direction'))->paginate(15);
        } else {
            $activities = Activity::orderBy('id', 'desc')->paginate(15);
        }
        return View::make('admin.activity.index')->with('activities', $activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity $request)
    {
        if ($request->image == null) {

            $activity = new Activity();
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->date = $request->date;
            $activity->category_id = $request->category_id;
            $activity->price = $request->price;
            $activity->image = null;
            $activity->save();
        } elseif (Input::file('image')->isValid()) {
            $destinationPath = 'images/uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = 'activiteit'.date("Y-m-d").'-'.rand(11111, 99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $activity = new Activity();
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->date = $request->date;
            $activity->category_id = $request->category_id;
            $activity->price = $request->price;
            $activity->image = '/'.$destinationPath.'/'.$fileName;
            $activity->save();
        } else {
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::to('beheer/activiteit/create');
        }

        return Redirect::to('beheer/activiteit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        return View::make('admin.activity.show')->with('activity', $activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return View::make('admin.activity.edit')->with('activity', $activity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActivity $request, $id)
    {
        if ($request->image == null) {
            $activity = Activity::find($id);
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->date = $request->date;
            $activity->category_id = $request->category_id;
            $activity->price = $request->price;
            $activity->save();
        } elseif (Input::file('image')->isValid()) {
            $destinationPath = 'images/uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = 'activiteit'.date("Y-m-d").'-'.rand(11111, 99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $activity = Activity::find($id);
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->date = $request->date;
            $activity->category_id = $request->category_id;
            $activity->price = $request->price;
            $activity->image = '/'.$destinationPath.'/'.$fileName;
            $activity->save();
        } else {
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::to('beheer/activiteit/create');
        }

        return Redirect::to('beheer/activiteit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
    }
}
