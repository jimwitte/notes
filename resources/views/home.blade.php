@extends('layouts.app') @section('content') 
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Your Notes 
				</div>
				<ul class="list-group">
					@foreach ($notes as $note) 
					<li class="list-group-item">
					<a href="{{$url = route('notes.show', ['id' => $note->id]) }}">
						{{ $note->title }} 
					</a>
						@foreach ($note->tags as $tag)
							<a class="btn btn-default btn-xs" role="button" href="{{ url('home') . '?f='.$tag->slug }}">
							{{ $tag->name }}
							</a>
						@endforeach 
					@endforeach
					</li>
				</ul>
			</div>
			@foreach ($tags as $tag)
			<a class="btn btn-default btn-xs" role="button"href="{{ url('home') . '?f='.$tag->slug }}">{{ $tag->name }}</a>
			@endforeach 
			{!! $notes->render() !!} 
		</div>
	</div>
</div>
@endsection