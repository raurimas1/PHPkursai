@extends('layout')
@section('title', 'Radars')
@section('content')

    <div class="container">
    <h1>Radar #{{ $radar->id}}</h1>
    <div>id: {{$radar->id}}</div>
    <div>data: {{$radar->date}}</div>
    <div>numeris: {{$radar->number}}</div>
    <div>distance: {{$radar->distance}}</div>
    <div>time: {{$radar->time}}</div>
    <div>speed: {{$radar->distance / $radar->time * 3.6}}</div>
    <br>
    
    <a href="{{ url('radars')}}" class="btn btn-primary" role="button"> Back</a>
    <a href="{{ url('/')}}" class="btn btn-primary" role="button"> Home</a>
    </div>
@endsection