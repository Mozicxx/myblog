@extends ('layouts.master')

@section ('content')

	<h1>Sign in</h1>

	<form method="POST" action="/login">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="email" class="control-label">Email:</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="password" class="control-label">Password:</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Log In</button>
		</div>

		@include('layouts.errors')
	</form>

@endsection

