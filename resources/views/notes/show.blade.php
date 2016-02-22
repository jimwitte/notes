@extends('layouts.app') @section('content') 
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div>
			<a class="btn btn-success btn-sm notes_inline_block" title="edit" href="{{$url = route('notes.edit', ['id' => $note->id]) }}" role="button">
				<span class="glyphicon glyphicon-edit" aria-hidden="true">
					Edit 
				</span>
			</a>
			<form method="POST" class="notes_inline_block form-inline" action="{{$url = route('notes.destroy', ['id' => $note->id]) }}">
				{{ method_field('delete') }} {{ csrf_field() }} 
				<button class="btn btn-danger btn-sm" name="delete" title="delete" value="delete" onClick="return confirm('Delete this Note?');">
					<span class="glyphicon glyphicon-trash" aria-hidden="true">
						Delete 
					</span>
				</button>
			</form>
			<small>
				<p>
					Updated: {{date_format($note->updated_at, 'Y-m-d H:i:s')}} | {{ $note->updated_at->diffForHumans()}} 
				</p>
			</small>
		</div>
		<div style="margin-top: 1.5em;">
			{!!Markdown::convertToHtml($note->body)!!} 
		</div>
		Tags: {{ implode(', ',$note->tagNames()) }} @include('notes._flash') 
	</div>
</div>
@endsection 