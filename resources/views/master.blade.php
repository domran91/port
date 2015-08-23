<html>
<head>
    <title>@yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 50px;">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Dominique Randolph</a>
        <ul class="nav navbar-nav">
            <li><a href="/resume">Resumes</a></li>

            @if (Auth::check())


            <li><a href="/resume/{{ Auth::id()}}/edit">Edit Resume</a></li>
            <li><a href="/auth/logout">Logout</a></li>

            @else
            <li><a href="/auth/register">Register</a></li>
            <li><a href="/auth/login">Login</a></li>
            @endif

        </ul>
    </div>
</nav>
    @yield('content')
</body>
</html>