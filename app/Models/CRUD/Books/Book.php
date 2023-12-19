<?php

namespace App\Models\CRUD\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'numero';
    protected $fillable = ['numero', 'titre', 'genre', 'author', 'prix'];
    use HasFactory;
}
