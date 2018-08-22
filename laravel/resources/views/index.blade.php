@extends('layout.mainlayout')

@section("body")
    <div class="container">
        <!-- Page Heading -->
        <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
        </h1>

        <!-- Project One -->
        @foreach($companies as $company)
            <div class="row">

                <div class="col-md-5">
                    <h3>{{$company->name}}</h3>
                    <p>{{$company->description}}</p>
                    <a class="btn btn-primary" href="{{ route('EmployeesList', $company->id) }}">View Employees</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
