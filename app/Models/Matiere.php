<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'matiere';

    // fillable
    protected $fillable = [
        'libelle',
        'coefficient',
    ];
    
    use HasFactory;
}
