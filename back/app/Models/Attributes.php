<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttributeValues;
use App\Models\AttributeType;


class Attributes extends Model
{
    use HasFactory;

    protected $table = 'product_attributes';

    public function values() {
        return $this->hasMany(AttributeValues::class, 'attribute_id');
    }

    public function type() {
        return $this->belongsTo(AttributeType::class, 'type');
    }
}
