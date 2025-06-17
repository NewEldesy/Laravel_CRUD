<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function add_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function add(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);

        Etudiant::create($request->only(['nom', 'prenom', 'classe']));

        return redirect('/ajouter')->with('status', 'Student added successfully');
    }

    public function update(Etudiant $etudiant)
    {
        return view('etudiant.update', compact('etudiant'));
    }

    public function update_etudiant(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);

        $etudiant->update($request->only(['nom', 'prenom', 'classe']));

        return redirect('/etudiant')->with('status', 'Student updated successfully');
    }

    public function delete(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect('/etudiant')->with('status', 'Student deleted successfully');
    }
}