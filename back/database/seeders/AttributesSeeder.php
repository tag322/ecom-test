<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $list = ['Attr', 'TrueFalseAttr'];

        for($i = 1; $i<100; $i++) {            
            DB::table('product_attributes')->insert([
                'attribute' => $i < 50 ? $list[0].$i : $list[1].($i-50),
                'type' => $i < 59 ? 1 : 2,
                'slug' => Str::slug($i < 59 ? $list[0].$i : $list[1].($i-50)),
                'category_id' => rand(1,15),
            ]);           
        }
    }
}
