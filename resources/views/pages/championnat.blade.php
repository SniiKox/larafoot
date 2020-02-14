@extends('default')

@section('content')
    <div class="bloc-analyse">
        <h1>Coucou les championnats</h1>

        @foreach($championnats as $championnat)
            <h2>{{ $championnat }}</h2>
        @endforeach

    </div>
@endsection
