<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<100; $i++) {
            DB::table('product_images')->insert([
                'title' => 'decor-small.jpg',
                'product_id' => $i,
            ]);
        }
    }
}
