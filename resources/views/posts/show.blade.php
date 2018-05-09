@extends('layouts.master')


@section('content')
<div class="col-sm-12 mt-5">
<h1 class="text-center">{{$post->title}}</h1> 
<p class="text-muted text-center">
<i class="fas fa-user text-muted"></i> &nbsp;<a href="#">{{$post->user->name}}</a><br>
{{$post->updated_at->diffForHumans()}}

</p>
<p><?php echo htmlspecialchars_decode($post->body); ?></p>


<hr>
<div class="comments"  style="clear:both">
<ul class="list-group">
	@foreach($post->comments as $comment)
	<li class="list-group-item bg-light">
	<strong>
		{{$comment->created_at->diffForHumans()}}&nbsp; <a href="#">{{$comment->user->name}}</a>&nbsp;: 
	</strong>
		{{ $comment->body}}
	</li>
	@endforeach
	</ul>
</div>
<hr>
<div class="card">
<div class="card-body">
	<h4 class="card-title">Leave a comment</h4>
	<div class="card-text">
		<form method="post" action="/posts/{{$post->id}}/comments">
		@csrf
		<div class="form-group">
			<textarea name="body" placeholder="Comment goes here" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Comment</button>
		</div>
		</form>
	</div>
	</div>
</div>
@include('layouts.errors')
</div>
@endsection
