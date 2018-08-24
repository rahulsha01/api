@extends('layout.app');
@section('body')
	
	<div class="container">
		<div>
			<center><h1>Create New Todo</h1></center>
			<form action="/todo" method="post">
				{{csrf_field()}}
				<div class="form-group col-md-4 col-md-offset-4">
					 <label for="exampleTextarea">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Title">
				</div>
					 <div class="form-group col-md-4 col-md-offset-4">

				      <label for="exampleTextarea">Add New Todo</label>
				      <textarea class="form-control" id="exampleTextarea" name="body" rows="3"></textarea></br>
				      <button class="btn btn-success" type="submit" >Save</button>
				    </div>
			</form>
			@if(count($errors) > 0)
			@foreach($errors->all() as $err)
				{{$err}}
			@endforeach
			@endif
		</div>
	</div>

@endsection