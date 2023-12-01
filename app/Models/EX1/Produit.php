<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'idproduit';
    public $timestamps = true;

    protected $fillable = [
        'idcategorie', 'nom', 'prix', 'quantiteStock', 'marque'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Models\EX1\Categorie', 'idcategorie');
    }

    public function ventes()
    {
        return $this->hasMany('App\Models\Vente', 'idproduit');
    }
}