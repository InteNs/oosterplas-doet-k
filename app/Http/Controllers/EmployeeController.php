<?php

namespace App\Http\Controllers;

use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();


        return view('employee', ['employees' => $employees]);

    }
}
