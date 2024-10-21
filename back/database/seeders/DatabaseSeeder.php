<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategoriesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(AttributesTypeSeeder::class);
        $this->call(AttributesSeeder::class);     
        $this->call(AttributeValuesSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(SpecifitiesSeeder::class);
        $this->call(ProductSpecsSeeder::class);
        $this->call(VariantsSeeder::class);
        $this->call(DiscountsSeeder::class);
        // $this->call(BasketSeeder::class);
        
        $this->call(RolesSeeder::class);
    }
}
