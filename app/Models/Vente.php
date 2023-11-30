<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $table = 'ventes';
    protected $primaryKey = 'idvente';
    public $timestamps = true;

    protected $fillable = [
        'idclient', 'idproduit', 'quantite', 'datevente'
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'idclient');
    }

    public function produit()
    {
        return $this->belongsTo('App\Models\Produit', 'idproduit');
    }
}