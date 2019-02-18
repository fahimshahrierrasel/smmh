@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Employee</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('employees.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Employee Name</label>
                                <input type="text" class="form-control" id="inputName" name="name"
                                       placeholder="Location Name">
                            </div>

                            <div class="form-group">
                                <label for="inputDept">Department</label>
                                <input type="text" class="form-control" id="inputDept" name="department"
                                       placeholder="Department">
                            </div>

                            <div class="form-group">
                                <label for="inputMobile">Mobile No</label>
                                <input type="text" class="form-control" id="inputMobile" name="mobile_no"
                                       placeholder="Mobile No">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
