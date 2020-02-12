<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ url('/')}}">LaraFoot</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('pronostic') }}">Pronostic <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('analyse')}}">Analyse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('resultat')}}">Résultat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact')}}">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<body>
<div class="container" style="padding-top:20px ">
    @yield('content')
</div>

<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
</body>

</html>


