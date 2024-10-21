<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['string', 'boolean'];
        for($i = 0; $i<2; $i++) {
            
            DB::table('attribute_types')->insert([
                'title' => $types[$i],
            ]);
        }
    }
}
