@extends('layouts.master')


@section('content')
<div class="col-sm-8 mt-5">
<h1>{{$post->title}}</h1>
<p class="text-muted">{{$post->updated_at->diffForHumans()}}</p>
<p>{{$post->body}}</p>
</div>
@endsection