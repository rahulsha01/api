@extends('layout.app');
@section('body')
  <div class="col-md-4 col-md-offset-4">
  	
  	<a href="/todo/create"><button class="btn btn-success">Add</button></a>
  </div>
<div class="col-md-4 col-md-offset-4">
	<center><h1 class="text center">Todo App</h1></center>
<ul class="list-group">
	 @foreach($todos as $val)
  <li class="list-group-item d-flex justify-content-between align-items-center">
   
    <a href="/todo/{{$val->id}}">{{$val->body}}</a>
   		<small style="color:green; font-family:italic; padding-left:10px">{{$val->title}}</small>
    <span class="badge badge-success badge-pill">{{$val->created_at->diffForHumans()}}</span>

  </li>
   <a href="/todo/{{$val->id}}/edit">
    	<button class="btn btn-danger">Edit</button>
    </a>
   @endforeach
</ul>
  </div>

@endsection