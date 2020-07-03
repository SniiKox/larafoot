@extends('default')

@section('content')
    <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Liste Statistiques</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('matchs.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Possession :</strong>
                    {{ $possessionMoyenne }} %
                </div>
                <div class="form-group">
                    <strong>BP :</strong>
                    {{ $totalButPour }} Buts marqués
                </div>
                <div class="form-group">
                    <strong>Cleansheet :</strong>
                    {{ $nb_cleansheet }} matchs sans encaisser de but
                </div>
                <div class="form-group">
                    <strong>Pourcentage de tirs cadrés :</strong>
                    {{ $pourcentageTirCadres }} %
                </div>
                <div class="form-group">
                    <strong>Passe moyenne par match :</strong>
                    {{ $passeMoyenne }} passes par match
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pays:</strong>
                    {{ $championnat->pays }}
                </div>
            </div> --}}
        </div>
    </div>
@endsection
