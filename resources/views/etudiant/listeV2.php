<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container py-4 text-center">
        <div class="row">
            <div class="col-12">
                <h1>Student List</h1>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="/ajouter" class="btn btn-primary mb-3">Add Student</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
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
                        @forelse($etudiants as $etudiant)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->classe }}</td>
                            <td>
                                <a href="/update/{{ $etudiant->id }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="/delete/{{ $etudiant->id }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet étudiant ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Aucun étudiant trouvé.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>