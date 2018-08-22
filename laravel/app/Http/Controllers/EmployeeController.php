<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
    public function destroy($id, $companyId)
    {
        Employee::destroy($id);
        return redirect(route('EmployeesList', $companyId));
    }
    public function store()
    {
        Employee::create(request(['name','company_id']));
    }

    public function create()
    {
       $companies =  Company::all();
       return view("employee.create", compact('companies'));
    }

    public function edit($companyid, $id)
    {
        $employee = Employee::findOrFail($id);
        return view("employee.edit", ['employee' => $employee, 'companyid' => $companyid]);
    }

    public function update(Request $request, $id, $companyid)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = request("name");
        $employee->save();

        return redirect(route("EmployeesList", $companyid));
    }


    public function rename()
    {
        Employee::update($id);
        $employee= Employee::findOrFail($id);
        return redirect(route('EmployeesList', $companyId));

    }
}
