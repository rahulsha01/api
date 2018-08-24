@extends('layout.app');

@section('title' , 'Song Edit');
@section('body')
{{$song->artist}}
@endsection
@section('list')
	{{$song->title}}
@endsection