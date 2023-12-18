<?php

namespace App\Models\CRUD\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['matricule','marque','model','type'];
    use HasFactory;
}
