@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Brands</div>

                    <div class="card-body">
                        <a role="button" class="btn btn-outline-primary float-right mb-3"
                           href="{{ route('brands.create') }}">New Brand</a>
                        <table class="table table-bordered display" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Brand</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $index => $brand)
                                <tr>
                                    <th scope="row">{{ (int)$index + 1 }}</th>
                                    <td>{{ $brand->name }}</td>
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
