<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'Utilisateurs';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\EX2\Profile');
    }
}