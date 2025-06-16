<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col s12">
                <h1>Update Student</h1>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                <hr>
                @endif
                <a href="/etudiant" class="btn btn-danger">Return to Student</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col s9">
                <form action="/update/traitement" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $etudiants->id }}">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom(s)</label>
                        <input type="text" class="form-control" name="nom" id="nom" value="{{ $etudiants->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="pname" class="form-label">Prénom(s)</label>
                        <input type="text" class="form-control" name="prenom" id="pname" value="{{ $etudiants->prenom }}">
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" name="classe" id="classe" value="{{ $etudiants->classe }}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>