<?php

namespace App\Models\CRUD\ProduitsAndCategories;

use Illuminate\Database\Eloquent\Model;
use App\Models\CRUD\ProduitsAndCategories\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'category_id'];
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
