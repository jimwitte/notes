 @if ($errors->any()) 
<div style="padding-left: 1em;" class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error) 
		<li>
			{{ $error }} 
		</li>
		@endforeach 
	</ul>
</div>
@endif 