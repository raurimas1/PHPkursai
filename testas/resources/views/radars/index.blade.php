@extends('layout')
@section('title', 'Radars')
@section('content')
    <div class="container">
    <h1>Radars</h1>
    
    <table class="table table-bordered">
    <tr><th>Date</th><th>Number</th><th>Speed</th><th>Actions</th></tr>
    @foreach ($radars as $radar) 
    <tr>
        <td>{{$radar->date}}</td>
        <td><a href="{{ url('radar', $radar->id)}}">{{$radar->number}}</a></td>
        <td>{{round($radar->distance / $radar->time * 3.6)}}</td>
        <td>
            <a href="{{ url("radars/$radar->id/edit")}}" class="btn btn-primary" role="button">Edit</a>
            <a href="{{ url("radars/$radar->id/confirmDelete")}}" class="btn btn-danger" role="button">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $radars->links() }}
    <br>
    <a href="{{url('radars/create')}}" class="btn btn-primary" role="button">Add new</a>
    <br>
    <br>
    <a href="{{url('/')}}" class="btn btn-primary" role="button">Back</a>
        
    </div>
@endsection