<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class basketseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<2; $i++) {
            DB::table('baskets')->insert([
                'user_id' => $i, 
            ]);
        }

        for($i = 1; $i<10; $i++) {
            DB::table('baskets_payload')->insert([
                'basket_id' => ceil($i/10),
                'product_id' => $i,
                'quantity' => rand(1,10),
            ]);
        }
    }
}
