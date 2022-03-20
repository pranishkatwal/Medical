@section('title')
    <title>Admin</title>
@stop

@extends('layouts.admin')


@section('content')
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            {{--            <div class="text-success"><h1>{{'Hi!  '. auth()->user() ? auth()->user()->name : '''Hi!  '. auth()->user() ? auth()->user()->name : ''}} </h1></div>--}}
            <div class="col-md-12">
                <div class="text-success"><h1>Welcome! {{auth()->user()->name}} </h1></div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header  bg-info    ">
                        Total Sales:
                    </div>
                    <div class="card-body bg-warning">
                        <span>20</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Total Available Quantity:
                    </div>
                    <div class="card-body bg-warning">
                        <span>100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success">
                        Total Revenue:
                    </div>
                    <div class="card-body bg-warning">
                        <span>$20</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
