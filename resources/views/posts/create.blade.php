@extends ('layouts.master')

@section ('content')
<h1>Create a new form</h1>

<hr>

<form method="POST" action="/posts">
{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control" id="title" name="title">
	</div>

	<div class="form-group">
		<label for="content">Content:</label>
		<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Publish</button>
	</div>

	@include ('layouts.errors')
</form>
@endsection