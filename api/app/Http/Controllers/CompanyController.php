<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function listEmployees($companyId)
    {
        $company = Company::findOrFail($companyId);
        $employees = $company->getEmployees();

        return view('employee.show', ['employees' => $employees, 'companyId'=>$companyId]);
    }
}
