@extends('header.custom')

@section('content')

This is my HomePage instance
@foreach($abid as $abids) 
<h1>{{$abids}}</h1>

@endforeach

@endsection