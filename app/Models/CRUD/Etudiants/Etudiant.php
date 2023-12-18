<?php

namespace App\Models\CRUD\Etudiants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'cin'
    ];
    use HasFactory;
}
