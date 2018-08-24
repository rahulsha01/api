@extends('layout.app');
@section('body')
<h1 class="text-center">{{$todo->body}} <sub>{{$todo->title}}</sub></h1>

@endsection