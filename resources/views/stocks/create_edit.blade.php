@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Mobile</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" name="batch" id="inputMobile"
                                       placeholder="Barcode/IMEI">
                            </div>
                            <div class="col-md-3">
                                <button id="search_btn" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>

                        <form method="post" action="{{ route('stocks.store') }}">
                            @csrf
                            <input name="mobile_id" id="inputMobileId" hidden>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputBrand">Brand</label>
                                    <input type="text" name="brand" class="form-control" id="inputBrand"
                                           placeholder="Brand.." required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputModel">Model</label>
                                    <input type="text" name="model" class="form-control" id="inputModel"
                                           placeholder="Model.." required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputBatch">Batch</label>
                                    <input type="text" class="form-control" name="batch" id="inputBatch"
                                           placeholder="Batch..." required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputRef">Reference</label>
                                    <input type="text" class="form-control" name="reference" id="inputRef"
                                           placeholder="Reference..." required>
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
                                <label for="inputTerritory">Territory</label>
                                <input type="text" class="form-control" id="inputTerritory" name="territory"
                                       placeholder="Territory..">
                            </div>
                            <div class="form-group">
                                <label for="inputEmployee">Employee</label>
                                <select id="inputEmployee" class="form-control" name="employee_id">
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputLocation">Location</label>
                                <select id="inputLocation" class="form-control" name="location_id">
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Stock Date</label>
                                <input type="date" class="form-control" id="inputDate" name="stock_date"
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
@section('js')
    <script>
        function setFormData(data) {
            if (data) {
                $('#inputMobileId').attr('value', data.id);
                $('#inputBrand').attr('value', data.brand);
                $('#inputModel').attr('value', data.model);
                $('#inputBatch').attr('value', data.batch);
                $('#inputBarcode').attr('value', data.bar);
                $('#inputRef').attr('value', data.ref);
                $('#inputImei').attr('value', data.imei);
            } else {
                $('#inputMobileId').attr('value', '');
                $('#inputBrand').attr('value', '');
                $('#inputModel').attr('value', '');
                $('#inputBatch').attr('value', '');
                $('#inputBarcode').attr('value', '');
                $('#inputRef').attr('value', '');
                $('#inputImei').attr('value', '');
            }
        }

        $(document).ready(function () {
            $('#search_btn').click(function () {
                let mobileCode = $('#inputMobile').val();
                if (mobileCode === '') {
                    alert('Please Provide Appropriate Information!!!')
                    return;
                }
                $.get('{{ url('admin/get-mobile') }}/' + mobileCode, function (data) {
                    if (jQuery.isEmptyObject(data)) {
                        setFormData(null);
                        alert('No Mobile Found!!!');
                        return;
                    }
                    setFormData(data);
                })
            });
        });
    </script>
@endsection