@section('title')
    <title>Invoice</title>
@stop

@extends('layouts.admin')

@section('content')

    <div class="row container">
        <h3>Generate Invoice</h3>
        <form class="row">
            <div class="form-group col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Date:</label>
                    <input type="text" class="form-control form-control-sm col-md-6">
                </div>
            </div>

            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Product</label>
                    <select name="medicine" id="">
                        <option value="">Select medicine</option>
                        <option value="">Med-1</option>
                        <option value="">Med-2</option>
                        <option value="">Med-3</option>
                        <option value="">Med-4</option>
                        <option value="">Med-5</option>
                    </select>
                </div>
            </div>
            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Customer-Name:</label>
                    <input type="text" class="form-control form-control-sm col-md-6">
                </div>
            </div>
            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Price:</label>
                    <input type="number" value="2" class="form-control form-control-sm col-md-6">
                </div>
            </div>

            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Customer-Name:</label>
                    <input type="text" class="form-control form-control-sm col-md-6">
                </div>
            </div>
            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Vat-13%:</label>
                    <input type="text" class="form-control form-control-sm col-md-6">
                </div>
            </div>
            <div class="form-group  col-md-12">
                <div class=" row">
                    <label for="exampleInputEmail1" class="col-md-6">Discount:</label>
                    <input type="text" class="form-control form-control-sm col-md-6">
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
            </div>


        </form>
    </div>


@stop
