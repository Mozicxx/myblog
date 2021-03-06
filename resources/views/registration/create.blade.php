@extends ('layouts.master')

@section ('content')

	<h1>Register</h1>

	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name" class="control-label">Name:</label>
			<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
		</div>

		<div class="form-group">
			<label for="email" class="control-label">Email:</label>
			<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
		</div>

		<div class="form-group">
			<label for="password" class="control-label">Password:</label>
			<input type="password" name="password" id="password" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="password_confirmation" class="control-label">Password confirm:</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
			{{-- mast be xxx_confirmation to active auto confirm --}}
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Register</button>
		</div>
	</form>
	@include ('layouts.errors')
@endsection

