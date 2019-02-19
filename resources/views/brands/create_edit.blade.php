@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Brand</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('brands.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputBrand">Brand Name</label>
                                <input type="text" class="form-control" id="inputBrand" name="name"
                                       placeholder="Brand..">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
