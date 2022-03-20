@section('title')
    <title>Medicine</title>
@stop

@extends('layouts.admin')


@section('content')
    <div class="container pt-5 col-md-12">
        @include('medicine/viewMedicinePartial')
    </div>
@stop
