<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brands";

    public function products() {
        return $this->hasMany(Product::class, 'brand_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function attributes() {
        return $this->hasMany(Attributes::class, 'category_id', 'category_id');
    }
}
