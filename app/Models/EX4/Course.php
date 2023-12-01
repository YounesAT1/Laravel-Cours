<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'title', 'description'
    ];

    public function students()
    {
        return $this->belongsToMany('App\Models\EX4\Student');
    }
}
