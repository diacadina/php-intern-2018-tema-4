@extends('layout.mainlayout')

@section("body")
    <div class="container">
        <form method="POST" action="/employees">
            {{csrf_field()}}

            <div class="form-group">
                <label>Introduce Employees</label>
                <input class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Select Company</label>
                <select class="form-control" name="company_id">
                    @foreach($companies as $company)
                        <option>{{$company->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
            
        </form>
    </div>
@endsection
