<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = 'idclient';

    public $timestamps = true;

    protected $fillable = [
        'nom', 'prenom'
    ];

    public function ventes()
    {
        return $this->hasMany('App\Models\EX1\Vente', 'idclient');
    }
}