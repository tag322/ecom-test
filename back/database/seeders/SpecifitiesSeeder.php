<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecifitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specs = ['discounted', 'recommended', 'popular', 'aboba'];

        for($i = 0; $i<4; $i++) {
            DB::table('specifities')->insert([
                'title' => $specs[$i],
            ]);
        }
    }
}
