<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class apprenantController extends Controller
{
    public function index()
    {
        // Récupérer les données de la base de données
        $apprenants = Apprenant::all();
        // dd($apprenants);
        return view('Apprenants.liste', compact('apprenants'));
    }
    public function create()
    {

        return view('Apprenants.create');
    }

    // fonction pour ajouter un etudiant
    public function store(Request $request)
    {
        // dd('toto');
        // Validate the request data
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
        ]);

        // Create a new apprenant
        $apprenant = new Apprenant;
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->matricule = $request->matricule;

        // Save the apprenant to the database
        $apprenant->save();

        // Redirect to the apprenants index page with a success message
        return redirect()->route('liste-apprenants')->with('success', 'Apprenant created successfully.');
    }

    





    
}
