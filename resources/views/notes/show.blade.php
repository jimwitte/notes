@extends('layouts.app') 
@section('content') 
<div class="container">
<div class="page-header">
  <h1>{{$note->title}} <small>{{$note->updated_at}}</small></h1>
</div>
<hr />
{{$note->body}}
</div>
@endsection 