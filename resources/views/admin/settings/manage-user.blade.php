@section('title')
    <title>Admin</title>
@stop

@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <table class="table">
            <thead>
            <tr>
                <td>SN:</td>
                <td>Name:</td>
                <td>Phone Number:</td>
                <td>email:</td>
            </tr>
            </thead>
            <tbody>
            @php($i= 0)
            @foreach($user as $user)
                <tr>
                    <td> {{++$i}}</td>
                    <td> {{$user->name}}</td>
                    <td> {{$user->phone_number}}</td>
                    <td> {{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@stop
