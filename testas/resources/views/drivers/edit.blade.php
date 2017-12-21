@extends('layout')

@section('content')
    <div class="container">
    <h1>Edit driver</h1>
    <form action="{{url("drivers", $driver->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input name="name"  type="text" value="{{$driver->name}}">
        <input name="city"  type="text" value="{{$driver->city}}">
        <button class="btn btn-secondary" type="submit">Update</button>
    </form>
    <br>
    <a href="{{ url('drivers')}}" class="btn btn-primary" role="button">Back</a>
    </div>
@endsection