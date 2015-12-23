@extends('master')

@section('content')
    <div id="banner">
        @if(Auth::guest())
            <div class="container">
                <h1>Welcome to Dieter's MINI CMS!!</h1>
                <h2>Please register or sign in to view and add content!</h2>
                <a href="/register" class="btn btn-default btn-lg button">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Register
                </a>
                <a href="/login" class="btn btn-default btn-lg button">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Sign in
                </a>
            </div>
        @else
            <div class="container">
                <h1>Welcome to Dieter's MINI CMS!!</h1>
                <h2>Now you can view or add content!</h2>
                <a href="/content" class="btn btn-default btn-lg button">
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span> View content
                </a>
                <a href="/add" class="btn btn-default btn-lg button">
                    <span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span> Add content
                </a>
            </div>
        @endif
    </div>

@endsection