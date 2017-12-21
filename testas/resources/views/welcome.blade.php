@extends('layout')
@section('title', 'Radar system')
@section('content')
        <div class="container">
        <h1>Fotikai :D</h1>
        <a href="{{url('radars')}}" class="btn btn-primary" role="button">Radars</a>
        <a href="{{url('drivers')}}" class="btn btn-primary" role="button">Drivers</a>
        </div>
@endsection
