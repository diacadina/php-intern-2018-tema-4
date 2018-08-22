@extends('layout.mainlayout')

@section("body")
    <div class="container">
        <form method="POST" action="{{route('updateEmployee', [$employee->id, $companyid])}}">
            {{csrf_field()}}

            <div class="form-group">
                <label>Enter new name</label>
                <input class="form-control" name="name" value="{{$employee->name}}">
            </div>

            <!--<div class="form-group">
                <label>Select Company</label>
                <select class="form-control" name="company_id">
                    @//foreach($companies as $company)
                        <option>{//{$company->name}}</option>
                    @//endforeach
                </select>
            </div>-->

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
