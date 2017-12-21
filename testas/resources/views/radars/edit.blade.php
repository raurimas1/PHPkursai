@extends('layout')

@section('content')
    <div class="container">
    <h1>Edit radar</h1>
    <form action="{{url("radars", $radar->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input name="date"  type="text" value="{{$radar->date}}">
        <input name="number"  type="text" value="{{$radar->number}}">
        <input name="distance"  type="text" value="{{$radar->distance}}">
        <input name="time"  type="text" value="{{$radar->time}}">
        <button class="btn btn-secondary" type="submit">Update</button>
    </form>
    <br>
    <a href="{{ url('radars')}}" class="btn btn-primary" role="button"> Back</a>
    </div>
@endsection