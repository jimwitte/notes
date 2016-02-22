@extends('layouts.app') @section('content') 
<div class="container">
	<div class="col-md-10">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
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
				<div>
					<small>
						Updated: {{date_format($note->updated_at, 'Y-m-d H:i:s')}} | {{ $note->updated_at->diffForHumans()}} 
					</small>
				</div>
			</div>
			<div class="panel-body">
				{!!Markdown::convertToHtml($note->body)!!} 
			</div>
		</div>
		@foreach ($note->tags as $tag) 
		<a class="btn btn-default btn-xs" role="button" href="{{ url('home') . '?f='.$tag->slug }}">
			{{ $tag->name }} 
		</a>
		@endforeach 
	</div>
</div>
</div>
@endsection 