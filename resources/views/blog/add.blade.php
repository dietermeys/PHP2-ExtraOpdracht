@extends('master')

@section('content')
    {!!   Form::open(array('url' => 'content/add')) !!}
    <h1>Add content</h1>

    <!-- if there are login errors, show them here -->
    @if(Session::has('message'))
        <div class="alert alert-success">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

    <p>
        {!! Form::label('url', 'URL') !!}
        {!! Form::text('url', Input::old('url'), array('placeholder' => 'https://www.youtube.com/watch?v=u2l6nk7pMQ0')) !!}
    </p>

    <p>{!! Form::submit('Submit!') !!}</p>
    {!! Form::close() !!}

@endsection