@extends ('layouts.master')

@section ('content')
<div class="inner cover">
    <h1>{{ $post->title }}</h1>
    @if (count($post->tags))
        <div class="list-group">
        <div class="row">
        @foreach ($post->tags as $tag)
            <a class="btn btn-info btn-sm" href="/posts/tags/{{ $tag->name }}" role="button">
                {{ $tag->name }}
            </a>
        @endforeach
        </div>
        </div>
    @endif
    <h5>
        {{ $post->content }}
    </h5>

    <hr>

    @if (count($post->comments))
    <div class="comments">
    	<ul class="list-group">
    		@foreach ($post->comments as $comment)
    		<li class="list-group-item">
    			<strong>{{ $comment->created_at->diffForHumans() }}</strong>:&nbsp;
    			{{ $comment->content }}
			</li>
			@endforeach
    	</ul>
    </div>

    <hr>
    @endif
    @if (auth()->check())
    <div class="card">
    	<div class="card-block">
    		<form action="/posts/{{ $post->id }}/comments" method="POST">
    		{{ csrf_field() }}
    			<div class="form-group">
    				<textarea name="content" id="" cols="30" rows="10" placeholder="your comment here" class="form-control" required></textarea>
    			</div>
    			<div class="form-group">
					<button type="submit" class="btn btn-primary">Publish</button>
    			</div>
    		</form>
			@include ('layouts.errors')
    	</div>
    </div>
    @endif
  </div>
@endsection