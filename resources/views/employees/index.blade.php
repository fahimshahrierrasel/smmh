@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Employees</div>

                    <div class="card-body">
                        <a role="button" class="btn btn-outline-primary float-right mb-3"
                           href="{{ route('employees.create') }}">New Employee</a>
                        <table class="table table-bordered display" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Mobile No</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $index => $employee)
                                <tr>
                                    <th scope="row">{{ (int)$index + 1 }}</th>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->department }}</td>
                                    <td>{{ $employee->mobile_no }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
