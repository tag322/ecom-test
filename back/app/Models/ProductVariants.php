<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Discount;
use App\Models\Product;

class ProductVariants extends Model
{
    use HasFactory;

    protected $table = 'product_variants';

    protected $fillable = [
        'product_id',
        'title',
        'price',
    ];

    public function discount() {
        return $this->hasOne(Discount::class, 'prod_vrnt_id');
    }

    public function parent_product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
