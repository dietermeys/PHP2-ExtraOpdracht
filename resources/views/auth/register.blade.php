@extends('master')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger margin">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
    <div class="form-only">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h1 class="col-sm-offset-1">Registration</h1>
                {!! Form::open(array('url' => 'register')) !!}
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('email', 'Email Address') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('password_confirmation', 'Password confirmation') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('secret_code', 'Secret code') !!}
                        {!! Form::text('secret_code', old('code'), ['class' => 'form-control', 'placeholder' => 'Secret code']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <br>
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection