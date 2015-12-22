@extends('master')

@section('content')
    {!!   Form::open(array('url' => 'content/add')) !!}
    <h1>Add content</h1>

    <!-- if there are login errors, show them here -->
    <p>
        {!! $errors->first('email') !!}
        {!! $errors->first('password') !!}
    </p>

    <p>
        {!! Form::label('url', 'URL') !!}
        {!! Form::text('url', Input::old('url'), array('placeholder' => 'https://www.youtube.com/watch?v=u2l6nk7pMQ0')) !!}
    </p>

    <p>{!! Form::submit('Submit!') !!}</p>
    {!! Form::close() !!}

@endsection