<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $table = 'apprenant';
    use HasFactory;
      // fillable  on precise les colonnes dans lesquel on peut inserer
    
    protected $fillable = [
        'nom',
        'prenom',
        'matricule',
    ];

    // guarded on autorise a inserer dans tous les colonnes sauf ceux specifier
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];
    
}
