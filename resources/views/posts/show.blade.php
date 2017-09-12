@extends ('layout')
@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>

		{{ $post->body}}
		<hr>
	
		<div class="comments">
			<ul class="list-gruop">
				@foreach ($post->comments as $comment)
				
				<li class = 'list-group-item'>
					<strong>

					{{ $comment->created_at->diffForHumans() }} : &nbsp;

					</strong>
					{{ $comment->body }}
				</li>
				
			@endforeach

			</ul>
			
		</div>

		<hr>
		<div class="card">
			
			<div class="card-block">
				<form method = 'post' action ="{{ route("post.comment",["post"=>$post->id]) }}">
				{{ csrf_field() }}
					<div class="form-group">
						<textarea name = 'body' placeholder = 'Your Comment Here!'  class = 'form-control'></textarea>
					</div>
					<div class="form-group">
						 <button type="submit" class="btn btn-primary">Comment</button>
					</div>
				</form>
				
			</div>
		</div>

	</div>

@endsection