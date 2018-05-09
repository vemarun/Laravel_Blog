<a href="posts/{{$post->id}}">
<h2> {{$post->title}} </h2>
</a>
<p class="text-dark">
<i class="fas fa-user text-muted"></i> &nbsp;<a href="#"> {{$post->user->name}}</a> on&nbsp; <i class="fas fa-calendar-alt text-muted"></i> &nbsp;{{$post->created_at->toFormattedDateString() }}</p>

<p> {!! strip_tags(str_limit($post->body,400)) !!}</p>
<a href="posts/{{$post->id}}" class="btn btn-primary mt-3">Read More <span class="fas fa-arrow-right"></span></a>
<hr>
