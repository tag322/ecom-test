<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function products() {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function categories() {
        return $this->hasMany(Category::class, 'parent_category_id');
    }

    public function brands() {
        return $this->hasMany(Brand::class, 'category_id');
    }

    public function attributes() {
        return $this->hasMany(Attributes::class, 'category_id');
    }
}
