<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = ['admin', 'customer'];

        for($i = 0; $i<2; $i++) {
            DB::table('roles')->insert([
                'title' => $arr[$i],
            ]);
        }
    }
}
