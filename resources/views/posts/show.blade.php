@extends ('layout')
@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>

		@if (count($post->tags))

			<ul>
				@foreach ($post->tags as $tag)
					<li>

						<a href = '/posts/tags/{{$tag->name}}'>{{$tag->name}}</a>

					</li>
				
				@endforeach

			</ul>
			
		@endif

		{{ $post->body}}
		<hr>
	
		<div class="comments">
			<ul class="list-gruop">
				@foreach ($post->comments as $comment)
				
				<li class = 'list-group-item'>
					<strong>
					{{ $comment->user->name }} || 
					{{ $comment->created_at->diffForHumans() }} : &nbsp;
<br/>
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
				@if(Auth::check())
					<div class="form-group">
						<textarea name = 'body' placeholder = 'Your Comment Here!'  class = 'form-control'></textarea>
					</div>
					<div class="form-group">
						 <button type="submit" class="btn btn-primary">Comment</button>
					</div>
				

				@endif
				</form>
				
			</div>
		</div>

	</div>
	

@endsection