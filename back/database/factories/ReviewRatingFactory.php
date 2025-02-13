<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\ReviewRating;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewRating>
 */
class ReviewRatingFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = ReviewRating::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'review_id' => 1,
            'is_like' => rand(0,1) ? true : false,
        ];
    }
}
