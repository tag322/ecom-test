<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ReviewRatingFactory;


class ReviewRating extends Model
{
    use HasFactory;

    protected $table = 'review_ratings';

    protected $fillable = [
        'user_id',
        'review_id',
        'is_like'
    ];

    protected static function newFactory()
    {
        return ReviewRatingFactory::new();
    }
}
