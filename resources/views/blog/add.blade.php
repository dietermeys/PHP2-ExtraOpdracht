@extends('master')

@section('content')
    <div id="banner1">
    @if(Session::has('message'))
        <div class="alert alert-success margin">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger margin">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif
    <div class="container">
    <div class="form-only">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h1 class="col-sm-offset-1">Add content</h1>
                {!!   Form::open(array('url' => 'add')) !!}
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        {!! Form::label('url', 'URL') !!}
                        {!! Form::text('url', Input::old('url'), array('class' => 'form-control', 'placeholder' => 'https://www.youtube.com/watch?v=u2l6nk7pMQ0')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <br>
                        <button class="btn btn-primary" type="submit">GO!</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
</div>
@endsection