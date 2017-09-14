
 

 			
			<h2 class = "blog-post-title">
			<a href = '/posts/{{ $post->id}}'>
			{{ $post->title }}</h2>
			</a>
		
			


			<p>{{ $post->body }}</p>
			
			<p class = 'blog-post-meta'> 
			
			{{ $post->user->name }} on: 
			{{ $post->created_at->toFormattedDateString() }}


			</p>
			<br/>
      

 
