<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap-tokenfield.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/tokenfield-typeahead.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mini CMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Sign in</a></li>
                @else
                    <li><a href="/content">Content</a></li>
                    <li><a href="/content/add">Add content</a></li>
                    <li><a href="/logout">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')

        <!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/bootstrap-tokenfield.min.js"></script>
<script src="../../assets/js/jquery-ui.min.js"></script>
</body>
</html>