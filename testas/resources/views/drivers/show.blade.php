@extends('layout')
@section('title', 'drivers')
@section('content')

    <div class="container">
    <h1>driver #{{ $driver->id}}</h1>
    <div>id: {{$driver->id}}</div>
    <div>vardas: {{$driver->name}}</div>
    <div>miestas: {{$driver->city}}</div>
    <br>
    
    <a href="{{ url('drivers')}}" class="btn btn-primary" role="button"> Back</a>
    <a href="{{ url('/')}}" class="btn btn-primary" role="button"> Home</a>
    </div>
@endsection