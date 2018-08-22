<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = [
            'data' => Employee::all()
        ];

        return response()->json($employees);
    }

    public function store(Request $request)
    {
        $emp = Employee::create($request->all());
        return response()->json($emp, 201);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json($employee);
    }

    public function destroy($id)
    {
        Employee::destroy($id);
    }   
}
