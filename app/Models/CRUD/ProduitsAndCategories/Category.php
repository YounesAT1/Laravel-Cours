<?php

namespace App\Models\CRUD\ProduitsAndCategories;

use Illuminate\Database\Eloquent\Model;
use App\Models\CRUD\ProduitsAndCategories\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected  $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

    public function product() {
        return $this->hasMany(Product::class, 'product_id');
    }
    use HasFactory;
}
