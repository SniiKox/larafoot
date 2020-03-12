@extends('default')

@section('content')

<div class = "row">

        <div style="text-align : center; width: 100%;">
            <h2 class="pading-top"> Modifier un championnat </h2>
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

            <form action="{{ route('championnats.update',$championnat->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="libelle"> Nom du championnat</label>
                    <input type="text" name="libelle" id="libelle" required="required" class="form-control" placeholder="Le nom..." value="{{ $championnat->libelle }}">
                </div>

                <div class="form-group">
                    <label for="pays"> Pays de la ligue</label>
                    <input type="text" name="pays" id="pays" required="required" class="form-control" placeholder="Le pays..." value="{{ $championnat->pays }}">
                </div>

                <div class="form-group">
                    <button type ="submit" class="btn btn-primary btn-block">Créer &raquo; </button>
                </div>

            </form>

            <div class="pull-right">
                    <a class="btn" href="{{ route('championnats.index') }}"> Retour</a>
            </div>

        </div>

@endsection
