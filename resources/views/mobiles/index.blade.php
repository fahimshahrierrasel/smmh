@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mobiles</div>

                    <div class="card-body">
                        <a role="button" class="btn btn-outline-primary float-right mb-3"
                           href="{{ route('mobiles.create') }}">New Mobile</a>
                        <table class="table table-bordered display" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">IMEI</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mobiles as $index => $mobile)
                                <tr>
                                    <th scope="row">{{ (int)$index + 1 }}</th>
                                    <td>{{ $mobile->brand->name }}</td>
                                    <td>{{ $mobile->model }}</td>
                                    <td>{{ $mobile->imei }}</td>
                                    <td>{{ $mobile->add_date }}</td>
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
