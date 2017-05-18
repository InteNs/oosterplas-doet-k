<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Input;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $employees = Employee::paginate(15);
        return view('admin.employee.index')->with('employees', $employees);
    }


    public function indexFront()
    {
        $employees = Employee::all();

        return view('employees', $employees);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->description = $request->description;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($employee);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/employee/create');
            }
        }
        $employee->save();
        return redirect('/beheer/employee');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('admin.employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin.employee.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->description = $request->description;

        if ($request->image != null) {
            if (Input::file('image')->isValid()) {
                $this->addImage($employee);
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('beheer/employee/create');
            }
        }
        $employee->save();
        return redirect('/beheer/employee');
    }

    private function addImage($employee)
    {
        $destinationPath = 'images/uploads';
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = 'employee' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;

        # save and link image
        Input::file('image')->move($destinationPath, $fileName);
        $employee->image = '/' . $destinationPath . '/' . $fileName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('/beheer/employee');
    }
}
