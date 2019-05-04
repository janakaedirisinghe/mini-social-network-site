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
					<article class="post" data-postid="{{ $post->id }}">
						<p>
							{{ $post ->body  }}
						</p>
						<div class="info">
							Post by {{$post->user->first_name}} on {{ $post-> created_at}}
						</div>
						<div class="interaction">
							<a href="#" class="badge badge-pill badge-primary">Like</a> 
							<a href="#" class="badge badge-pill badge-warning">Dislike</a> 

								@if(Auth::user() == $post->user)
										<a href="#" class="badge badge-pill badge-success">Edit</a> 

									<a href="{{ route('post.delete',['post_id' => $post->id ]) }}" class="badge badge-pill badge-danger">Delete</a>

								@endif

							


						</div>

					</article>


				@endforeach
				
				
			</div>

	</section>





<!-- Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       		<div class="form-group">
       			
       			<textarea name="post-body" class="form-control" cols="30" rows="5" id="post-body">
       				
       			</textarea>
       		</div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="modal-save" id="modal-save" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
		var token = '{{ Session::token() }}';
		var url ='{{ route('edit')  }}';
</script>

@endsection

