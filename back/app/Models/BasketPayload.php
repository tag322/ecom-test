<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Basket;
use App\Models\ProductVariants;

class BasketPayload extends Model
{
    use HasFactory;

    protected $table = 'baskets_payload';

    protected $fillable = ['product_id', 'basket_id', 'quantity'];

    public function basket() {
        return $this->belongsTo(Basket::class, 'basket_id');
    }

    public function payload() {
        return $this->belongsTo(ProductVariants::class, 'product_id');
    }
}
