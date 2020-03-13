@extends('default')

@section('content')

<div class = "row">

    <div style="text-align : center; width: 100%;">
        <h2 class="pading-top"> Liste des équipes </h2>
    </div>

    <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">


            @if (!Auth::guest() && Auth::user()->admin)
                <div class="pull-right" style="padding-bottom : 10px;">
                    <a href="{{ route('equipes.create') }}">
                        <button> Ajouter une équipe </button>
                    </a>
                </div>
            @endif


        <table class="table table-bordered">
            <tr>
                <th>Libelle</th>
                <th>Championnat</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($equipes as $equipe)
                <tr>
                    <td>{{ $equipe->libelle }}</td>
                    <td>{{ $equipe->championnat->libelle }}</td>
                    @if (!Auth::guest() && Auth::user()->admin)
                        <td>
                            <form action="{{ route('equipes.destroy',$equipe->id) }}" method="POST">
                                {{-- <a class="btn btn-info" href="{{ route('equipes.show',$equipe->id) }}">Afficher</a> --}}
                                <a class="btn btn-primary" href="{{ route('equipes.edit',$equipe->id) }}">Modifier</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    @else
                        <td>Aucune action possible</td>
                    @endif
                    </tr>
                @endforeach
        </table>
    </div>

    {!! $equipes->links() !!}
</div>

@endsection
