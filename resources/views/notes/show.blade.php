@extends('layouts.app') @section('content') 
<div class="container">
	<div align="right">
		<form method="POST" class="notes_inline_block form-inline" action="{{$url = route('notes.destroy', ['id' => $note->id]) }}">
			{{ method_field('delete') }} {{ csrf_field() }} 
			<button 
				class="btn btn-danger" 
				name="delete" 
				title="delete" 
				value="delete"
				onClick="return confirm('Delete this Note?');"
			>
				<span class="glyphicon glyphicon-trash" aria-hidden="true">
				</span>
			</button>
		</form>
		<a class="btn btn-primary" title="edit" href="{{$url = route('notes.edit', ['id' => $note->id]) }}" role="button">
		<span class="glyphicon glyphicon-edit" aria-hidden="true">
		</span>
	</a>
	</div>
	<div>
	<h1 class="notes_no_gap">
		{{$note->title}} 
	</h1>
	<small>
		<p>{{$note->updated_at}}</p>
	</small>
</div>
<div>
	{{$note->body}} 
</div>
</div>
@endsection 