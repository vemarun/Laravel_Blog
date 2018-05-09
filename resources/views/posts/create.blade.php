@extends('layouts.master')
@section('require')
	
	
	
@endsection

@section('content')
<h2>Create a post</h2>
<hr>
@include('layouts.errors')

<script type="text/javascript" src="/js/nicEdit.js"></script>
	<script type="text/javascript">
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<form method="post" action="/posts">
 @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
   
  </div>
  <div class="form-group">
  <textarea name="body" class="form-control"></textarea>
	</div>
  
  <button type="submit" class="btn btn-primary">Publish</button>
 
</form>




@endsection
