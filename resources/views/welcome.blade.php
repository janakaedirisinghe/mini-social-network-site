@extends('layouts.master')

@section('title')
		Welcome
@endsection

@section('content')

@if(count($errors) > 0)
<div class="row">
	<div class="col-md-12">
		
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">{{$error}}</div>
			@endforeach
		
	</div>
</div>
@endif
	
	<div class="row">
		<div class="col-md-6">
			<h3>Sign Up</h3>
			<form method="post" action="/signup">
				 {{csrf_field()}}

				<div class="form-group {{ $errors->has('email') ? 'has-error' : ' ' }}">
					<label for="email"> Email</label>
					<input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
				</div>
				<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ' ' }}">
					<label for="first_name"> First Name</label>
					<input type="text" class="form-control" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
				</div>
				<div class="form-group">
					<label for="password"> Password</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<button type="submit" class="btn btn-primary"> Submit</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>

		<div class="col-md-6">
			<h3>Sign In</h3>

			<form method="post" action="/signin">
				{{csrf_field()}}
				<div class="form-group">
					<label for="email"> Email</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>
				
				<div class="form-group">
					<label for="password"> Password</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<button type="submit" class="btn btn-primary"> Submit</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>		


@endsection