@extends('master')

@section('content')
        <!-- if there are login errors, show them here -->
@if (count($errors) > 0)
    <div class="alert alert-danger margin">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-only">
    <div class="col-md-6 col-md-offset-3">
        <div class="form-container">
            <h1 class="col-sm-offset-1">Login</h1>
            {!! Form::open(array('url' => 'login')) !!}

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
                    <br>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection