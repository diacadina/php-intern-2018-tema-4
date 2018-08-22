<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Employee;
use App\Company;

Route::get('/', function () {
    $companies = Company::all();
    return view('index', compact('companies'));
});


Route::get('employees/create', 'EmployeeController@create');
Route::get('employees/delete/{employee}/{company}', 'EmployeeController@destroy')->name("destroyEmployee");
Route::get('employees/{companyid}', 'CompanyController@listEmployees')->name("EmployeesList");

Route::get('employees/{company}/{employee}/edit', 'EmployeeController@edit')->name("employeeEdit");


Route::post('employees', 'EmployeeController@store');
Route::post('employees/update/{employee}/{company}', 'EmployeeController@update')->name("updateEmployee");


Route::get('employees', function ()
{
    return view('employee.show');
});
