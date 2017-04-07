<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreActivity;
use App\Activity;
use App\Http\Controllers\Controller;
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
        return view('admin.activity.create', [
            'categories' => Category::pluck('title', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity $request)
    {
        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->date = $request->date;
        $activity->category_id = $request->category;
        $activity->price = $request->price;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($activity);
            } else {
                Session::flash('error', 'uploaded file is not valid');
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
            'activity' => Activity::findOrFail($id),
            'categories' => Category::pluck('title', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActivity $request, $id)
    {
        $activity = Activity::find($id);
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->date = $request->date;
        $activity->category_id = $request->category;
        $activity->price = $request->price;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($activity);
            } else {
                Session::flash('error', 'uploaded file is not valid');
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
