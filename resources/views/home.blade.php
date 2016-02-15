@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <ol class="list-group">
               @foreach ($user->notes as $note)
               <li class="list-group-item">{{ $note->title }}</li>
               @endforeach
               </ol>
                
            </div>
        </div>
    </div>
</div>
@endsection
