@extends('default')

@section('content')

<div class = "row">

    <div style="text-align : center; width: 100%;">
        <h2 class="pading-top"> Nouvelle équipe </h2>
    </div>

    <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('equipes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="libelle"> Nom de l'équipe</label>
                <input type="text" name="libelle" id="libelle" required="required" class="form-control" placeholder="Le nom..." value="{{ old('libelle') }}">
            </div>

            <div class="field">
                <label class="label">Catégorie</label>
                <div class="select">
                    <select name="championnat_id">
                        @foreach($championnats as $championnat)
                            <option value="{{ $championnat->id }}">{{ $championnat->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <button type ="submit" class="btn btn-primary btn-block">Créer</button>
            </div>

        </form>


        <div class="pull-right">
                <a class="btn" href="{{ route('equipes.index') }}"> Retour</a>
        </div>

    </div>
@endsection
