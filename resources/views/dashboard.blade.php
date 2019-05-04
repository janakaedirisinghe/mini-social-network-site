@extends('layouts.master')

@section('content')

@include('includes.message-block')

	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you have to say?</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<textarea name="body" id="new-post" rows="5" placeholder="Your post" class="form-control"></textarea>

				</div>
				<button type="submit" class="btn btn-primary" >Create Post</button>
				<input type="hidden" name="" value="{{ Session::token() }}" name="_token">
			</form>
		</div>
	</section>

	<section class="row posts">
			
			<div class="col-md-6 col-md-offset-3">
				<header><h3>What other people say...</h3></header>
				@foreach($posts as $post)
					<article class="post">
						<p>
							{{ $post ->body  }}
						</p>
						<div class="info">
							Post by {{$post->user->first_name}} on {{ $post-> created_at}}
						</div>
						<div class="interaction">
							<a href="#">Like</a>
							<a href="#">DisLike</a>
							<a href="#">Edit</a>
							<a href="#">Delete</a>
						</div>

					</article>


				@endforeach
				
				
			</div>

	</section>
@endsection

