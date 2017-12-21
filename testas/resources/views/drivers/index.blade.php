@extends('layout')
@section('title', 'drivers')
@section('content')
    <div class="container">
    <h1>drivers</h1>
    
    <table class="table table-bordered">
    <tr><th>Name</th><th>City</th><th>Actions</th></tr>
    @foreach ($drivers as $driver) 
    <tr>
        <td><a href="{{ url('/drivers', $driver->id)}}">{{$driver->name}}</a></td>
        <td>{{$driver->city}}</td>
        <td>
            <a href="{{ url("drivers/$driver->id/edit")}}" class="btn btn-primary" role="button">Edit</a>
            <a href="{{ url("drivers/$driver->id/confirmDelete")}}" class="btn btn-danger" role="button">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $drivers->links() }}
    <br>
    <a href="{{url('drivers/create')}}" class="btn btn-primary" role="button">Add new</a>
    <br>
    <br>
    <a href="{{url('/')}}" class="btn btn-primary" role="button">Back</a>
        
    </div>
@endsection