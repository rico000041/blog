
<!-- create-->

@extends('layout')


@section('content')

  <div class="col-sm-8 blog-main">

	<h1>A place to Create</h1>

	<form method = 'post' action = '\posts'>
		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Example Title</label>
	    <input type="text" name = 'title' class="form-control" id="title" required>
	  </div>
	 
	  <div class="form-group">
	    <label for="body">Example Body</label>
	    <textarea class="form-control" name = 'body' id="body" required></textarea>
	    <small id="emailHelp" class="form-text text-muted">Other Users can see your Blog.</small>
	  </div>

	  <button type="submit" class="btn btn-primary">Publish</button>
	</form>

</div>
@endsection


