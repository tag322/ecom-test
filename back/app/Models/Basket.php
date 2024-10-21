<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BasketPayload;
use App\Models\User;


class Basket extends Model
{
    use HasFactory;

    protected $table = 'baskets';

    protected $fillable = ['session_id', 'user_id'];

    public function products_payload() {
        return $this->hasMany(BasketPayload::class, 'basket_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
