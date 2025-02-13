<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReviewRating;
use Illuminate\Support\Facades\DB;



class ProductReviewRatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = DB::table('product_reviews')->limit(100)->get();
        $users = DB::table('users')->limit(10)->get();

        for($i = 0; $i < count($reviews); $i++) {        
            for($j = 0; $j < count($users); $j++) {
                ReviewRating::factory()
                ->create([
                    'review_id' => $reviews[$i]->id,
                    'user_id' => $users[$j]->id
                ]);
            }
        }
    }
}
