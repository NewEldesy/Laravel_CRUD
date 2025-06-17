<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function add_etudiant(){
        return view('etudiant.ajouter');
    }

    public function add(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'Student add Successfuly');
    }

    public function update($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'Student Update Successfuly');
    }

    public function delete($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant')->with('status', 'Student Delete Successfuly');
    }
}
