<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'email'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\EX3\Book');
    }
}