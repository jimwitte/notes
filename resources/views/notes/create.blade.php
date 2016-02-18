@extends('layouts.app') 
@section('content') 
<div class="container">
	<form method="POST" action="/notes">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Note Title</label>
			<input type="text" name="title" id="title" class="form-control"> 
		</div>
		<div class="form-group">
			<label for="body">Note Body</label>
			<textarea name="body" id="body" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-primary">Add Note</button>
		</div>
</div>
</form>
</div>
@endsection 