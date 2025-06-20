<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col s12">
                <h1>Student List</h1>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                <hr>
                @endif
                <a href="/ajouter" class="btn btn-primary">Add Student</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col s9">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Classe</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->classe }}</td>
                            <td>
                                <a href="/update/{{ $etudiant->id }}" class="btn btn-warning">Update</a>
                                <a href="/delete/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php
                            $ide += 1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>