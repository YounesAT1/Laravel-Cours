<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'Utilisateur_id', 'bio', 'avatar'
    ];

    public function Utilisateur()
    {
        return $this->belongsTo('App\Models\EX2\Utilisateur');
    }
}