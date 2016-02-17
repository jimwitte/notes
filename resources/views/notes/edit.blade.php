@extends('layouts.app') 
@section('content') 
<div class="container">
	<h1>
		Edit Note
	</h1>
	<form method="POST" action="{{$url = route('notes.update', ['id' => $note->id]) }}">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Note Title</label>
			<input type="text" name="title" id="title" value="{{$note->title}}" class="form-control"> 
		</div>
		<div class="form-group">
			<label for="body">Note Body</label>
			<textarea name="body" id="body" class="form-control">{{$note->body}}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-primary">Update Note</button>
		</div>
</div>
</form>
</div>
@endsection 