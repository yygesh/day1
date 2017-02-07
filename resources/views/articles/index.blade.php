@extends('app')


@section('content')

<h3>Articles</h3>
@foreach($articles as $article)

<h1><a href="{{url('/articles',$article->id)}}">{{$article->title}}</a></h1>
<div class='body'> {{$article->body}}</div>
@endforeach
@stop