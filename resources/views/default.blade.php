<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ route('root_path')}}">LaraFoot</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('pronostic_path') }}">Pronostic <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('analyse_path')}}">Analyse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resultat_path')}}">Résultat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_path')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('championnats.index')}}">Championnat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('score_path')}}">Score</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
</header>

<body>

    @yield('content')

<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')

</body>

</html>


