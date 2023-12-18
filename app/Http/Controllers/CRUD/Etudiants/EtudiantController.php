<?php

namespace App\Http\Controllers\CRUD\Etudiants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRUD\Etudiants\Etudiant;


class EtudiantController extends Controller
{
    public function index() {
      $etudiants = Etudiant::all();
      return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    public function create() {
      return view('etudiants.create');
    }

    public function store(Request $request) {
      $validatedData = $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'cin' => 'required'
      ]);

      Etudiant::create($validatedData);

      return redirect()->route('etudiant.index');
    }

    public function edit (Etudiant $etudiant) {
      return view('etudiants.edit', ['etudiant' => $etudiant]);
    }

    public function update (Etudiant $etudiant, Request $request) {
      $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'cin' => 'required'
      ]);

      $etudiant ->update($validatedData);

      return redirect()->route('etudiant.index');
    }

    public function destroy (Etudiant $etudiant) {
      $etudiant->delete();
      return redirect()->route('etudiant.index');
    }
  
}
