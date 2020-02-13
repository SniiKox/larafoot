@extends('default')

@section('content')
    <div>
        <div class="bloc-banner">
            <h1>BIENVENUE SUR LARAFOOT</h1>
            <p>Consulter les résultats, les pronostiques et bien plus.</p>
            <button>En savoir plus</button>
        </div>
        <img class="banner-img" src="img/stade.jpg">
    </div>
    <img class="banner" src="img/larafoot-equipe.jpg">
    <div class="explain">
        <h2>Grâce à nous, vous pourrez :</h2>
        <a href="{{ url('/pronostic') }}"><button>Pronostic</button>
        <a href="{{ url('/analyse') }}"><button>Analyse</button>
        <a href="{{ url('/resultat') }}"><button>Résultat</button>
    </div>
@endsection
