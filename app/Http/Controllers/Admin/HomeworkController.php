<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Entry;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Entry::where('activity_id', 1)->paginate(15);
        return view('admin.homework.index')->with('homeworks', $homeworks);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homework = Entry::find($id);
        return view('admin.homework.show')->with('homework', $homework);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Entry::destroy($id);
        return redirect('/beheer/huiswerk');
    }
}
