@extends('layout')
@section('title', 'Radars')
@section('content')
    <div class="container">
    <h1>Do you REALY want to delete Radar #{{$radar->id}}???</h1>
    
    <div class="container">
    <h1>Radar #{{ $radar->id}}</h1>
    <div>id: {{$radar->id}}</div>
    <div>data: {{$radar->date}}</div>
    <div>numeris: {{$radar->number}}</div>
    <div>distance: {{$radar->distance}}</div>
    <div>time: {{$radar->time}}</div>
    <div>speed: {{$radar->distance / $radar->time * 3.6}}</div>
    <br>
    
    <form method="post" action="{{ url('/radars', $radar->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    <button class="btn btn-danger" type="submit">Yes, Delete</button>
    </form>    
    <br>
    <a href="{{url('/radars')}}" class="btn btn-primary" role="button">No, go back</a>
        
    </div>
@endsection