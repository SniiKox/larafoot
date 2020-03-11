@extends('default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('championnats.create') }}"> Creer championnat</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>libelle</th>
            <th>pays</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($championnats as $championnat)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $championnat->libelle }}</td>
                <td>{{ $championnat->pays }}</td>
                <td>
                    <form action="{{ route('championnats.destroy',$championnat->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('championnats.show',$championnat->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('championnats.edit',$championnat->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $championnats->links() !!}

@endsection