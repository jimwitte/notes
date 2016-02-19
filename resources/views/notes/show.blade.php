@extends('layouts.app') @section('content') 
<div class="container">
	<div class="col-md-10 col-md-offset-1">
	<div style="line-height: .9em;">
	</form>
	<a class="btn btn-success notes_inline_block" title="edit" href="{{$url = route('notes.edit', ['id' => $note->id]) }}" role="button">
		<span class="glyphicon glyphicon-edit" aria-hidden="true">
			Edit 
		</span>
	</a>
	<form method="POST" class="notes_inline_block form-inline" action="{{$url = route('notes.destroy', ['id' => $note->id]) }}">
		{{ method_field('delete') }} {{ csrf_field() }} 
		<button class="btn btn-danger" name="delete" title="delete" value="delete" onClick="return confirm('Delete this Note?');">
			<span class="glyphicon glyphicon-trash" aria-hidden="true">
				Delete 
			</span>
		</button>
		<small>
			<p class="notes_inline_block">
				{{date_format($note->updated_at, 'Y-m-d H:i:s')}}<br /> {{ $note->updated_at->diffForHumans()}} 
			</p>
		</small>
	</div>
	<div style="margin-top: 1.5em;">
		{!!Markdown::convertToHtml($note->body)!!} 
	</div>
</div>
</div>
@endsection 