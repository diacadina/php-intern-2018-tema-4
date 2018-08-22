<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function getEmployees()
    {
        return Employee::where('company_id', '=', $this->getKey())->get();
    }
}
