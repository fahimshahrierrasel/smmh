@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Stocks</div>

                    <div class="card-body">
                        <a role="button" class="btn btn-outline-primary float-right mb-3"
                           href="{{ route('stocks.create') }}">New Stock</a>
                        <table class="table table-bordered display" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Model</th>
                                <th scope="col">Territory</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Location</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stocks as $index => $stock)
                                <tr>
                                    <th scope="row">{{ (int)$index + 1 }}</th>
                                    <td>{{ $stock->mobile->model }}</td>
                                    <td>{{ $stock->territory }}</td>
                                    <td>{{ $stock->employee->name }}</td>
                                    <td>{{ $stock->location->name }}</td>
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
