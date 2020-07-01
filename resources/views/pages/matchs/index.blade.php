@extends('default')

@section('content')

    <div class = "row">

        <div style="text-align : center; width: 100%;">
            <h2 class="pading-top"> Choisir une équipe: </h2>
        </div>

        <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">
            <div class="field">
                <label class="label">Equipes:</label>
                <div class="select">
                    <select name="championnat_id">
                        @foreach($equipes as $equipe)
                            <option value="{{ $equipe->id }}">{{ $equipe->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </div>

@endsection
