@extends('default')

@section('content')
    <div class="bloc-analyse">
        <h1>Coucou les scores</h1>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Domicile</th>
                <th scope="col">Extérieur</th>
                <th scope="col">Score</th>
                <th scope="col">Vainqueur</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barcelone</td>
                <td>Real Madrid</td>
                <td>5-0</td>
                <th scope="row">Barcelone</th>
              </tr>
              <tr>
                <td>PSG</td>
                <td>OM</td>
                <td>3-0</td>
                <th scope="row">Paris</th>
              </tr>
              <tr>
                <td>Gisors FC</td>
                <td>RC Fléchois</td>
                <td>5-5</td>
                <th scope="row">Gisors FC t.a.b (3-1)</th>
              </tr>
            </tbody>
          </table>

    </div>
@endsection
