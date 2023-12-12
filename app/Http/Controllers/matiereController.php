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
    
}
