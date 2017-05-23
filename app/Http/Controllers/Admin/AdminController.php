<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PageCount;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index')->with('pagecounts', PageCount::orderBy('count', 'desc')->get());
    }
}
