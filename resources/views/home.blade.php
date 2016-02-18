@extends('layouts.app') 
@section('content') 
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					Dashboard
				</div>
				<div class="panel-body">
					You are logged in! 
				</div>
				<div class="list-group">
					@foreach ($notes as $note)
					<a href="{{$url = route('notes.show', ['id' => $note->id]) }}" class="list-group-item">
						{{ $note->title }}
					</a>
					@endforeach 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 