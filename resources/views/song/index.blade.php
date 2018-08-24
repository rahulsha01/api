@extends('layout.app');
@section('title' , 'Song');
@section('body')
{{'Songs Every Where'}}

@endsection
@section('list')
@foreach($songs as $val)
<li>{{$val->title}}</li>
@endforeach
@endsection