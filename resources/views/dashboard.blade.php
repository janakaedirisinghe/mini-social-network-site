@extends('layouts.master')

@section('content')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you have to say?</h3></header>
			<form action="#" method="post">
				<div class="form-group">
					<textarea name="new-post" id="new-post" rows="5" placeholder="Your post" class="form-control"></textarea>

				</div>
				<button type="submit" class="btn btn-primary" >Create Post</button>
			</form>
		</div>
	</section>

	<section class="row posts">
			
			<div class="col-md-6 col-md-offset-3">
				<header><h3>What other people say...</h3></header>
				<article class="post">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="info">
						Post by Janaka on 12Feb 2019
					</div>
					<div class="interaction">
						<a href="#">Like</a>
						<a href="#">DisLike</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</div>

				</article>
				<article class="post">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="info">
						Post by Janaka on 12Feb 2019
					</div>
					<div class="interaction">
						<a href="#">Like</a>
						<a href="#">DisLike</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</div>

				</article>
			</div>

	</section>
@endsection

