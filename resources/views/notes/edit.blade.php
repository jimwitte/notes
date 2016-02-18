@extends('layouts.app') 
@section('content') 
<div class="container">
	<form method="POST" action="{{$url = route('notes.update', ['id' => $note->id]) }}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
		<div class="form-group">
			<label for="body">Note Body</label>
			<textarea name="body" id="body" class="form-control" rows="20">{{$note->body}}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-primary">Update Note</button>
		</div>
</div>
</form>
</div>
@endsection 