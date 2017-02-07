@extends('app');

@section('content')


<h3>place</h3>

@foreach($data as $value)

{{ $value}}

@endforeach

@stop