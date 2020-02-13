@extends('default')

@section('content')
    <div>
        <div class="bloc-banner">
            <h1>BIENVENUE SUR LARAFOOT</h1>
            <p>Consulter les résultats, les pronostiques et bien plus.</p>
            <a href="#teamExpert">
                <button>Voir l'équipe</button>
            </a>
        </div>
        <img class="banner-img" src="img/stade.jpg">
    </div>
    <a id="teamExpert"></a>
    <img class="banner" src="img/larafoot-equipe.jpg">
    <div class="explain">
        <h2>Grâce à nous, vous pourrez :</h2>
        <a href="{{ route('pronostic_path') }}"><button>Pronostiquer</button></a>
        <a href="{{ route('analyse_path') }}"><button>Analyser</button></a>
        <a href="{{ route('resultat_path') }}"><button>Consulter les résultats</button></a>
    </div>
@endsection
