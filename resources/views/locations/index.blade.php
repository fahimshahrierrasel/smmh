@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Locations</div>

                    <div class="card-body">
                        <a role="button" class="btn btn-outline-primary float-right mb-3"
                           href="{{ route('locations.create') }}">New Location</a>
                        <table class="table table-bordered display" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Location</th>
                                <th scope="col">Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($locations as $index => $location)
                                <tr>
                                    <th scope="row">{{ (int)$index + 1 }}</th>
                                    <td>{{ $location->name }}</td>
                                    <td>{{ $location->details }}</td>
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
