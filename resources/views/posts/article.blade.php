
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
			<h2 class = "blog-post-title">

			<a href = '/posts/{{ $post->id}}'>
			{{ $post->title }}</h2>
			</a>
			<p>{{ $post->body }}</p>

			<p class = 'blog-post-meta'> {{ $post->created_at->toFormattedDateString() }}</p>
			<br/>
        </div>

        
      </div>

    </div>