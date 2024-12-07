<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class TrendingProduct extends Model
{
    use HasFactory;

    protected $table = 'trending_products';

    protected $fillable = [
        'product_id', 
        'position'
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
