<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Report;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $reports = Report::paginate(15);
        return view('admin.report.index')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $nonCleanedActivities = Activity::all();
        return view('admin.report.create')->with('activities', $nonCleanedActivities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = new Report();
        $report->activity_id = $request->activity_id;
        $report->title = $request->title;
        $report->message = $request->message;
        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($report);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $report->save();
        return redirect('/beheer/rapportage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('admin.report.show')->with('report', $report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $report = Report::find($id);
        $nonCleanedActivities = Activity::all();
        return view('admin.report.edit')->with('report', $report)->with('activities', $nonCleanedActivities);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $report->activity_id = $request->activity_id;
        $report->title = $request->title;
        $report->message = $request->message;
        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($report);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/partner/create');
            }
        }
        $report->save();
        return redirect('/beheer/rapportage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Report::destroy($id);
        return redirect('/beheer/rapportage');
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
}
