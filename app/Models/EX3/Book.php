<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'author_id', 'title', 'description'
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}