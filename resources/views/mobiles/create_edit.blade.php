@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Mobile</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('mobiles.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputBrand">Brand</label>
                                    <select id="inputBrand" class="form-control" name="brand_id">
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputModel">Model</label>
                                    <input type="text" name="model" class="form-control" id="inputModel"
                                           placeholder="Model..">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputBatch">Batch</label>
                                    <input type="text" class="form-control" name="batch" id="inputBatch"
                                           placeholder="Batch...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputRef">Reference</label>
                                    <input type="text" class="form-control" name="reference" id="inputRef"
                                           placeholder="Reference...">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputBarcode">Bar Code</label>
                                    <input type="text" name="barcode" class="form-control" id="inputBarcode"
                                           placeholder="Barcode...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputImei">IMEI</label>
                                    <input type="text" class="form-control" id="inputImei" name="imei"
                                           placeholder="IMEI">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Add Date</label>
                                <input type="date" class="form-control" id="inputDate" name="add_date"
                                       placeholder="Date">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
