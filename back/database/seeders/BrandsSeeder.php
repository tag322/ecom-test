<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<6; $i++) {
            DB::table('brands')->insert([
                'title' => 'brand'.$i,
                'slug' => 'brand'.$i,
                'category_id' => rand(1,15),
            ]);
        }
    }
}
