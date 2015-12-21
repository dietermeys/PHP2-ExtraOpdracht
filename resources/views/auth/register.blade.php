@extends('master')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('url' => 'register')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('secret_code', 'Secret code') !!}
        {!! Form::text('secret_code', old('code'), ['class' => 'form-control', 'placeholder' => 'Secret code']) !!}
    </div>
    <div class="form-group button__margin">
        <button class="btn btn-primary" type="submit">Register</button>
    </div>
    {!! Form::close() !!}
@endsection