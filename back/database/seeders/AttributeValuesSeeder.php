<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class AttributeValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::select('id', 'category_id')->get()->toArray();

        $categories = Category::select('id')->with('attributes:category_id,id,slug', 'products')->get()->toArray();
        foreach ($categories as &$category) {
            $category['products'] = array_column($category['products'], 'id');
        }
        unset($category);
        foreach ($categories as &$category) {
            $attrslist = [];
            foreach ($category['attributes'] as $attr) {
                array_push($attrslist, ['id' => $attr['id'], 'slug' => $attr['slug']]); 
            }
            $category['attributes'] = $attrslist;
        }
        unset($category);
        

        for($i = 0; $i<count($categories); $i++) {
            $attrs = $categories[$i]['attributes'];
            for($j = 0; $j<count($categories[$i]['products']); $j++) {
                for($a = 0; $a < count($attrs); $a++) {
                    DB::table('product_attributes_values')->insert([
                        'product_id' => $categories[$i]['products'][$j],
                        'attribute_id' => $attrs[$a]['id'],
                        'value' => !str_contains($attrs[$a]['slug'], 'true') ? 'value'.($i+1)*($j+1)*($a+1) : array_rand(array('true', 'false')),
                    ]);
                }
            }
        }
    }
}
