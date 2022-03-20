@section('title')
    <title>Medicine</title>
@stop

@extends('layouts.admin')

@section('content')
    <div class="container pt-5 ml-5">
        <h5>Search Medicine</h5>
        <div class="col-md-12">
            <div class="row">
                <form action="{{route('search-medicine')}}" method="get" style="width: 100%">
                    @csrf
                    <div class="form-group row">
                        <label for="Medicine" class="col-form-label col-md-3">Medicine Name:</label>
                        @if(Request::get('name'))
                            <input type="text" value="{{Request::get('name')}}"
                                   class="form-control col-md-6" id="name"
                                   name="name">
                        @else
                            <input type="text" class="form-control col-md-6" id="name"
                                   name="name">
                        @endif
                        @if($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                        <button class="btn btn-success col-md-1 ml-2" type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            @include('medicine/viewMedicinePartial')
        </div>
    </div>
@endsection
