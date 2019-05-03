@extends('layouts.master')

@section('title')
		Welcome
@endsection

@section('content')
	
	<div class="row">
		<div class="col-6">
			<form method="post" action="#">
				<div class="form-group">
					<label for="email"> Email</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="email"> Email</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="email"> Email</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>
			</form>
		</div>
	</div>		


@endsection