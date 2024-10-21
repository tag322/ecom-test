<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariants;
use App\Models\category;
use App\Models\Brand;
use App\Models\Attributes;
use App\Models\Specifity;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'slug',
        'vendor_code',
        'category_id',
        'instorage',
        'description',
        'brand_id',
    ];

    public function variants() {
        return $this->hasMany(ProductVariants::class, 'product_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function attributes() {
        return $this->belongsToMany(Attributes::class, 'product_attributes_values', 'product_id', 'attribute_id')->withPivot('value');
    }

    

    public function specs() {
        return $this->belongsToMany(Specifity::class, 'product_specs', 'product_id', 'specificity_id');
    }

    public function images() {
        return $this->hasMany(ProductImage::class, 'product_id');
    } 
}
