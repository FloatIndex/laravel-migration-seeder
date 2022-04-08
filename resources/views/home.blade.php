@extends('layouts.standard')

@section('content')
    <h1>{{$tour['name']}}</h1>
    <p>DESTINATION: {{$tour['destination']}}</p>
    <p>DURATION: {{$tour['duration']}}</p>
    <p>PRICE: {{$tour['price']}}</p>
    <p>THEME: {{$tour['theme']}}</p>
    <p>CLASS: {{$tour['class']}}</p>
    <p>OVERVIEW: {{$tour['overview']}}</p>
    <small>REFERENCE CODE: {{$tour['reference_code']}}</small>
@endsection