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
                        <?php
                        $data = json_decode(file_get_contents("http://www.youtube.com/oembed?url=" . $blog->url . "&format=json"));
                        echo "<h3 class='panel-title'>" . $data->title . " By " . $data->author_name . "</h3>";
                        ?>
                    </div>
                    <div class="panel-body">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$blog->mediaId}}"
                                frameborder="0" allowfullscreen></iframe>
                        @foreach($comments as $comment)
                            @if($blog->id === $comment->contentId)
                                <p><b>{{$comment->comment}}</b> <br>
                                    posted {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                            @endif
                        @endforeach
                        {!!   Form::open(array('url' => 'content')) !!}
                        <div class="form-group">
                            {!! Form::hidden('content', $blog->id) !!}
                            {!! Form::label('comment', 'Post comment:') !!}
                            {!! Form::text('comment', Input::old('comment'), array('placeholder' => 'Comment here')) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Comment!</button>
                        {!! Form::close() !!}
                    </div>
                </div>

            @elseif($blog->type === 'Vimeo')
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <?php
                        $data = json_decode(file_get_contents("http://vimeo.com/api/v2/video/" . $blog->mediaId . ".json"));
                        echo "<h3 class='panel-title'>" . $data[0]->title . " By " . $data[0]->user_name . "</h3>";
                        ?>
                    </div>
                    <div class="panel-body">
                        <iframe src="//player.vimeo.com/video/{{$blog->mediaId}}" width="100%" height="315"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        @foreach($comments as $comment)
                            @if($blog->id === $comment->contentId)
                                <p><b>{{$comment->comment}}</b> <br>
                                    posted {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                            @endif
                        @endforeach
                        {!!   Form::open(array('url' => 'content')) !!}
                        <div class="form-group">
                            {!! Form::hidden('content', $blog->id) !!}
                            {!! Form::label('comment', 'Post comment:') !!}
                            {!! Form::text('comment', Input::old('comment'), array('placeholder' => 'Comment here')) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Comment!</button>
                        {!! Form::close() !!}
                    </div>
                </div>

            @elseif($blog->type === 'Soundcloud')
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <?php
                        $data = json_decode(file_get_contents("https://soundcloud.com/oembed?url=" . $blog->url . "&format=json"));
                        echo "<h3 class='panel-title'>" . $data->title . " By " . $data->author_name . "</h3>";
                        ?>
                    </div>
                    <div class="panel-body">
                        <iframe class="iframe" width="100%" height="315" scrolling="no" frameborder="no"
                                src="https://w.soundcloud.com/player/?url={{$blog->url}}&amp;auto_play=false&amp;buying=true&amp;liking=true&amp;download=true&amp;sharing=true&amp;show_artwork=true&amp;show_comments=true&amp;show_playcount=true&amp;show_user=true&amp;hide_related=false&amp;visual=true&amp;start_track=0&amp;callback=true"></iframe>
                        @foreach($comments as $comment)
                            @if($blog->id === $comment->contentId)
                                <p><b>{{$comment->comment}}</b> <br>
                                    posted {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                            @endif
                        @endforeach
                        {!!   Form::open(array('url' => 'content')) !!}
                        <div class="form-group">
                            {!! Form::hidden('content', $blog->id) !!}
                            {!! Form::label('comment', 'Post comment:') !!}
                            {!! Form::text('comment', Input::old('comment'), array('placeholder' => 'Comment here')) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Comment!</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif


        @endforeach
    </div>


@endsection
