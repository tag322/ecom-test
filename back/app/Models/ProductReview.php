<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReviewRating;
use App\Models\User;

class ProductReview extends Model
{
    use HasFactory;

    protected $table = 'product_reviews';
    protected $fillable = [
        'user_id',
        'grade',
        'product_id',
        'review_commentary',
        'review_pros',
        'review_cons',
        'images_urls'
    ];

    public function reviewRating() {
        return $this->hasMany(ReviewRating::class, 'review_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
