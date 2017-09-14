@extends ('layout')

@section('content')
	

@foreach ($posts as $post)
    @include('posts.article')
@endforeach
      
@endsection