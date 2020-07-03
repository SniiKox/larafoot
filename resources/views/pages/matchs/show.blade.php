@extends('default')

@section('content')
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
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pays:</strong>
                {{ $championnat->pays }}
            </div>
        </div> --}}
    </div>
@endsection
