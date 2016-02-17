@extends('layouts.app') 
@section('content') 
<div class="container">
	<div class="page-header">
		<h1>
			{{$note->title}} 
			<small>
				{{$note->updated_at}}
			</small>
			<a class="btn btn-primary" href="{{$url = route('notes.edit', ['id' => $note->id]) }}" role="button">Edit</a>
		</h1>
	</div>
<div>
{{$note->body}} 
</div>
</div>
@endsection 