@extends('layouts.app') @section('content') 
<div class="container">
	<div class="col-md-10 col-md-offset-1">
	<form method="POST" action="{{$url = route('notes.update', ['id' => $note->id]) }}">
		{{ csrf_field() }} {{ method_field('PUT') }} 
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success">
				<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
				Save
			</button>
		</div>
		<div class="form-group">
			<label for="body">
				Note Body
			</label>
			<textarea data-provide="markdown" name="body" id="body" class="form-control" rows="20">{{ $note->body }}</textarea> 
		</div>
</div>
</form>
</div>
</div>
@endsection 