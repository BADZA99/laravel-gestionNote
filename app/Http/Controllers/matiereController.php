<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class matiereController extends Controller
{
    public function index(){
        //recuperer les donnees de la bdd
        $matieres = Matiere::all();
        return view('matieres.Listematieres',compact('matieres'));
        // retourne tous les matieres
        // return $matieres;
    }

    public function create()
    {
        return view('matieres.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'libelle' => 'required',
            'coefficient' => 'required|numeric',
        ]);

        // Create a new matiere
        $matiere = new Matiere;
        $matiere->libelle = $request->libelle;
        $matiere->coefficient = $request->coefficient;

        // Save the matiere to the database
        $matiere->save();

        // Redirect to the matieres index page with a success message
        return redirect()->route('liste-matieres')->with('success', 'Matiere created successfully.');
    }

    
}
