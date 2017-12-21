@extends('layout')
@section('title', 'Driver')
@section('content')
    <div class="container">
    <h1>Do you REALY want to delete Driver #{{$driver->id}}???</h1>
    
    <div class="container">
    <h1>Driver #{{ $driver->id}}</h1>
    <div>id: {{$driver->id}}</div>
    <div>vardas: {{$driver->name}}</div>
    <div>miestas: {{$driver->city}}</div>
    <br>
    
    <form method="post" action="{{ url('/drivers', $driver->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    <button class="btn btn-danger" type="submit">Yes, Delete</button>
    </form>    
    <br>
    <a href="{{url('/drivers')}}" class="btn btn-primary" role="button">No, go back</a>
        
    </div>
@endsection