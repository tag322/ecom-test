<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<5; $i++) {
        DB::table('categories')->insert([
            'title' => 'category'.$i,
            'slug' => Str::slug('category'.$i, '-'),
            'parent_category_id' => null,
        ]);
        }

        for($i = 1; $i<11; $i++) {
            DB::table('categories')->insert([
                'title' => 'subcategory'.$i,
                'slug' => Str::slug('subcategory'.$i, '-'),
                'parent_category_id' => ceil($i/2),
            ]);
        }
    }
}
