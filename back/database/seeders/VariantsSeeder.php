<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class VariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::with('specs')->get()->toArray();
        foreach($products as &$listelem) {
            $listelem['specs'] = array_column($listelem['specs'], 'title');
        }
        unset($listelem);

        for($i = 1; $i<199; $i++) {
            $product = array_filter($products, function($iter) use ($i) {
                return $iter['id'] == ceil($i/2);
            });
            DB::table('product_variants')->insert([
                'product_id' => ceil($i/2),
                'title' => 'var'.(($i % 2)+1),
                'price' => rand(500, 5000),
                // 'discount_price' => in_array('discounted', $product[array_key_first($product)]['specs']) ? rand(10,400) : null,
                'is_primary_variant' => $i % 2 == 1 ? true : null,
            ]);
        }
    }
}
