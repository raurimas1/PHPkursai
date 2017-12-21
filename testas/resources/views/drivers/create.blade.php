@extends('layout')

@section('content')

    <div class="container">
    <h1>Add new driver</h1>
    <form action="{{url("drivers")}}" method="post">
    {{ csrf_field() }}
        <input name="name" placeholder="name" type="text">
        <input name="city" placeholder="city" type="text">
        <button class="btn btn-secondary" type="submit">Add</button>
    </form>
    <br>
    <a href="{{ url('drivers')}}" class="btn btn-primary" role="button">Back</a>
    </div>
@endsection