@section('title')
    <title>Medicine</title>
@stop

@extends('layouts.admin')


@section('content')
    <div class="container pt-5">
        <div class="col-md-9">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".manufacturer-modal-lg">
                Add Manufacturer
            </button>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".medicine-modal-lg">
                Add Medicine
            </button>
            @include('medicine/manufacturerModal')
            @include('medicine/medicineModal')
        </div>
        <div class="">
            @if(count($errors->getBags()))
            @endif
            @if(Session::has('success'))
                <div class="alert-success"> {{Session::get('success')}}</div>
            @endif
        </div>
        <h3 class="pt-3">Enter Medicine Stock</h3>
        <form action="{{route('add-medicine-stock')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="manufacturer-name" class="col-form-label">Medicine
                                        Name:</label>
                                    <select name="medicine_id" class="form-control" id="medicine_id">
                                        <option value="">Please select any</option>
                                        @if($medicine)
                                            @foreach($medicine as $medicine)
                                                <option value="{{$medicine->id}}">{{$medicine->medicine_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if($errors->has('medicine_id'))
                                        <p class="text-danger">{{ $errors->first('medicine_id') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="manufacturer-name" class="col-form-label">Manufacturer
                                        Name:</label>
                                    <select name="medicine_manufacturer_id" class="form-control" id="medicine_manufacturer_id">
                                        <option value="">Please select any</option>
                                        @if($medicineManufacturer)
                                            @foreach($medicineManufacturer as $manufacturer)
                                                <option value="{{$manufacturer->id}}">{{$manufacturer->manufacturer_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if($errors->has('manufacturer_id'))
                                        <p class="text-danger">{{ $errors->first('manufacturer_id') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="manufacturer-name" class="col-form-label">Supplier
                                        Name:</label>
                                    <input type="text" class="form-control" name="supplier_name" id="supplier_name">
                                    @if($errors->has('supplier_name'))
                                        <p class="text-danger">{{ $errors->first('supplier_name') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="Manufactured Date"><h4>Manufactured Date:</h4></label>
                                    <input type="date" class="form-control" name="manufactured_date"
                                           id="manufactured_date"
                                           placeholder="enter manufactured date">
                                    @if($errors->has('manufactured_date'))
                                        <p class="text-danger">{{ $errors->first('manufactured_date') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="Expiry Date"><h4>Expiry Date:</h4></label>
                                    <input type="date" class="form-control" name="expiry_date" id="expiry_date"
                                           placeholder="enter expiry date">
                                    @if($errors->has('expiry_date'))
                                        <p class="text-danger">{{ $errors->first('expiry_date') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Cost Price:</h4></label>
                                    <input type="number" class="form-control" name="cost_price" id="cost_price"
                                           placeholder="Cost Price">
                                    @if($errors->has('cost_price'))
                                        <p class="text-danger">{{ $errors->first('cost_price') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Selling Price:</h4></label>
                                    <input type="number" class="form-control" name="selling_price" id="phone_number"
                                           placeholder="Selling Price">
                                    @if($errors->has('manufactured_date'))
                                        <p class="text-danger">{{ $errors->first('manufactured_date') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="dosage"><h4>Quantity:</h4></label>
                                    <input type="number" class="form-control" name="quantity" id="quantity"
                                           placeholder="Quantity">
                                    @if($errors->has('quantity'))
                                        <p class="text-danger">{{ $errors->first('quantity') }}</p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> Submit
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>


@stop
