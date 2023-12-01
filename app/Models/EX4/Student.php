<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'email'
    ];

    public function courses()
    {
        return $this->belongsToMany('App\Models\EX4\Course');
    }
}