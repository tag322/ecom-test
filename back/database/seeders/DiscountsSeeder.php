<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductVariants;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discountedproducts = Product::query()->whereHas('specs', function($query){
            $query->where('title', 'discounted');
        })->get()->pluck('id')->toArray();

        $discountedvariants = ProductVariants::query()->whereIn('product_id', $discountedproducts)->get()->pluck('id')->toArray();

        for($i = 0; $i < count($discountedvariants); $i++) {
            DB::table('discounts')->insert([
                'prod_vrnt_id' => $discountedvariants[$i],
                'discount_percent' => rand(5,50),
            ]);
        }
        
    }
}
