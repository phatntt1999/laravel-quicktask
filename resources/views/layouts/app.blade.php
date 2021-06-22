<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Custom css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('index') }}">
                        {{ trans('title.task-list') }}
                    </a>
                </div>
                <div class="lang">
                    <a href="{{ route('user-lang', ['en']) }}">
                        <img src="{{ asset('images/united-kingdom.png') }}" width="35" height="25" alt="">
                    </a>
                    <a href="{{ route('user-lang', ['vi']) }}">
                        <img src="{{ asset('images/vietnam.png') }}" width="35" height="25" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ asset('bower_components/jquery/dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
