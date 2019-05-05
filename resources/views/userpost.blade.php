@extends('layouts.master')

@section('title')
    View Post
@endsection

@section('content')

<section class="row posts">

	<div class="col-md-6 col-md-offset-3">

				<header><h3>What  says...</h3></header>

				@foreach($posts as $post)
					<article class="post" data-postid="{{ $post->id }}">
						<p>
							{{ $post ->body  }}
						</p>
						<div class="info">
							Post by <a href="{{ route('user.post',['user_id' => $post->user_id ]) }}" style="text-decoration: none;color: #aaa;">{{$post->user->first_name}}</a> <small>on {{ $post-> created_at}}  updated on {{ $post-> updated_at }}</small>
						</div>
						<div class="interaction">

							<a href="#" class="badge badge-pill badge-warning" style="text-decoration: none; color: white">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'}}</a> 
							<a href="#" class="badge badge-pill badge-warning" style="text-decoration: none;color: white">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'}}</a> 

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

 <script>
         var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
        var urlLike = '{{ route('like') }}';
 </script>




@endsection