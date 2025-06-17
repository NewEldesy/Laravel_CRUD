<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container py-4">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h1>Update Student</h1>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="/etudiant" class="btn btn-danger">Return to Student</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/update/traitement" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $etudiant->id }}">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom(s)</label>
                        <input type="text" class="form-control" name="nom" id="nom" value="{{ old('nom', $etudiant->nom) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pname" class="form-label">Prénom(s)</label>
                        <input type="text" class="form-control" name="prenom" id="pname" value="{{ old('prenom', $etudiant->prenom) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" name="classe" id="classe" value="{{ old('classe', $etudiant->classe) }}" required>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>