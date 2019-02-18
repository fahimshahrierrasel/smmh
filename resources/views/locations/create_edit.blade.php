@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Location</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('locations.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Location Name</label>
                                <input type="text" class="form-control" id="inputName" name="name"
                                       placeholder="Location Name">
                            </div>

                            <div class="form-group">
                                <label for="inputDetails">Location Details</label>
                                <input type="text" class="form-control" id="inputDetails" name="details"
                                       placeholder="Details">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
