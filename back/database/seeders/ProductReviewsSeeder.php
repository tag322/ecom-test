<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductReview;

use Illuminate\Support\Facades\DB;

class ProductReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->limit(10)->get();
        $reviews = DB::table('product_reviews')->limit(100)->get();
        $products = DB::table('products')->limit(10)->get();

        for($i = 0; $i < 100; $i++) {
            ProductReview::factory()
            ->create([
                'user_id' => $users->random()->id,
                'product_id' => $products->random()->id
            ]);
        }

        // ProductReview::factory()
        //     ->count(50)
        //     ->has(ReviewRating::factory()->count(3), [
        //         'user_id' => $users->random()->id,
        //         'review_id' => $reviews->random()->id
        //     ])
        //     ->create([
        //         'user_id' => $users->random()->id,
        //         'product_id' => $products->random()->id
        //     ]);
    }
}
