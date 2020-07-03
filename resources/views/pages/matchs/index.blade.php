@extends('default')

@section('content')
    <div class = "row">

        <div style="text-align : center; width: 100%;">
            <h2 class="pading-top"> Statistique </h2>
        </div>

        <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">

        <form action="{{ action('MatchController@statistique') }}" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="equipes" class="control-label">Choisir une équipe :</label>
                <select name="equipes">
                    @foreach($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type ="submit" class="btn btn-primary btn-block">Afficher</button>
            </div>

            </form>
        </div>

    </div>
@endsection

