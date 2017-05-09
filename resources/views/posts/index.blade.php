@extends ('layouts.master')

@section ('content')

	@foreach ($posts as $post)
		@include('posts.post')
	@endforeach

	{{ $posts->links('posts.pagination') }}

@endsection