@extends('layout')

@section('content')

    <div class="container">
    <h1>Add new radar</h1>
    <form action="{{url("radars")}}" method="post">
    {{ csrf_field() }}
        <input name="date" placeholder="date" type="text">
        <input name="number" placeholder="number" type="text">
        <input name="distance" placeholder="distance" type="text">
        <input name="time" placeholder="time" type="text">
        <button class="btn btn-secondary" type="submit">Add</button>
    </form>
    <br>
    <a href="{{ url('radars')}}" class="btn btn-primary" role="button">Back</a>
    </div>
@endsection