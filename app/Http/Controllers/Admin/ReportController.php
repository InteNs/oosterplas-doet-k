<?php

namespace App\Http\Controllers\Admin;

use App\Report;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReport;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.report.create');
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
        $report->title = $request->title;
        $report->message = $request->message;
        $report->image = $request->image;
        $report->save();
        return redirect('/beheer/activiteit');
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
        return view('admin.report.edit')->with('report', $report);
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
        $report->title = $request->title;
        $report->message = $request->message;
        $report->image = $request->image;
        $report->save();
        return redirect('/beheer/activiteit');
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
        return redirect('/beheer/activiteit');
    }
}
