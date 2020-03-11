@extends('default')

@section('content')

<div class = "row">

    <div style="text-align : center; width: 100%;">
        <h2 class="pading-top"> Liste des championnats </h2>
    </div>

    <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">

        <div class="pull-right">
            <a style="background-color: #fcdb00; color : #20396f; border:none;" class="btn btn-success" href="{{ route('championnats.create') }}"> Ajouter un championnat</a>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Libelle</th>
                <th>Pays de la ligue</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($championnats as $championnat)
                <tr>
                    <td>{{ $championnat->libelle }}</td>
                    <td>{{ $championnat->pays }}</td>
                    <td>
                    <form action="{{ route('championnats.destroy',$championnat->id) }}" method="POST">
                        {{-- <a class="btn btn-info" href="{{ route('championnats.show',$championnat->id) }}">Afficher</a> --}}
                        <a class="btn btn-primary" href="{{ route('championnats.edit',$championnat->id) }}">Modifier</a>
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
        </table>
    </div>

    {!! $championnats->links() !!}

@endsection
