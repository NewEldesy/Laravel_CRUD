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
                <h1>Add Student</h1>
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
                <form action="add/traitement" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom(s)</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Etudiant" value="{{ old('nom') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pname" class="form-label">Prénom(s)</label>
                        <input type="text" class="form-control" name="prenom" id="pname" placeholder="Prénom Etudiant" value="{{ old('prenom') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" name="classe" id="classe" placeholder="Classe Etudiant" value="{{ old('classe') }}" required>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>