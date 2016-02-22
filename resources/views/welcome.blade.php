@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Notes</div>

                <div class="panel-body">
                    <strong>Notes</strong> is a web application where you can write and edit notes using Markdown. App features include:
                    <ul>
                    	<li>multiple users, with registration and authentication, each user has their own space</li>
                    	<li>markdown editor with preview</li>
                    	<li>note tagging</li>
                    </ul>
                    <p>To get started, log in or register.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
