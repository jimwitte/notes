@extends('layouts.app') @section('content') 
<div class="container">
	<div class="col-md-10">
		<form method="POST" action="{{$url = route('notes.store') }}">
			{{ csrf_field() }} 
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-save" aria-hidden="true">
					</span>
					New Note 
				</button>
			</div>
			<div class="form-group">
				<label for="body">
					Note Body 
				</label>
<textarea data-provide="markdown" name="body" id="body" class="form-control" rows="12"></textarea> 
			</div>
			<div class="form-group">
				<label for="tags">
					Tags 
				</label>
				<input type="text" name="tags" id="tags" class="form-control"> 
			</div>
		</form>
		@include('errors.list') 
	</div>
</div>
@endsection 