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

        // autoriser tous les requetes
        // Apprenant::create($request->all());

        // creer un tab associatif dans lequel les cles sont les connes au niveau de la bdd et ce qui est dans les inputs sont les names de notre formulaire. (pas la peine de creer un fillable)
        // apprenant::create([
        //     'nom' => $request->input('nom'),
        //     'prenom' => $request->input('prenom'),
        //     'matricule' => $request->input("matricule"),
        // ]);

        // Create a new apprenant
        $apprenant = new Apprenant;
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->matricule = $request->matricule;

        // enregistrer dans la bdd
        $apprenant->save();

        // Redirection sur la page apprenant avec un message
        return redirect()->route('liste-apprenants')->with('success', 'Apprenant created successfully.');
    }

    





    
}
