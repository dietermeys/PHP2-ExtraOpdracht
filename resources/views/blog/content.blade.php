@extends('master')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success margin">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger margin">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif
    <div class="container">
    @foreach($blogs as $blog)

        @if($blog->type === 'Youtube')
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Youtube - {{$blog->mediaId}}</h3>
                    </div>
                    <div class="panel-body">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$blog->mediaId}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
        @elseif($blog->type === 'Vimeo')
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vimeo - {{$blog->mediaId}}</h3>
                    </div>
                    <div class="panel-body">
                        <iframe src="//player.vimeo.com/video/{{$blog->mediaId}}" width="100%" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
        @elseif($blog->type === 'Soundcloud')
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Soundcloud - {{$blog->mediaId}}</h3>
                    </div>
                    <div class="panel-body">
                        <iframe class="iframe" width="100%" height="315" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url={{$blog->url}}&amp;auto_play=false&amp;buying=true&amp;liking=true&amp;download=true&amp;sharing=true&amp;show_artwork=true&amp;show_comments=true&amp;show_playcount=true&amp;show_user=true&amp;hide_related=false&amp;visual=true&amp;start_track=0&amp;callback=true"></iframe>
                    </div>
                </div>
        @endif

    @endforeach
    </div>
@endsection