<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<100; $i++) {
            DB::table('products')->insert([
                'title' => 'test'.$i,
                'slug' => Str::slug('testProduct'.$i, '-'),
                'vendor_code' => rand(100000, 999999),
                'category_id' => rand(1,15),
                'instorage' => rand(0, 200),
                'description' => $faker->sentence(10),
                'brand_id' => rand(1,5)
            ]);
        }
    }
}
