<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductVariants;
use Illuminate\Support\Str;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ProductsApiController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */

    public static function middleware(): array
    {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show', 'getProd']),
        ];
    }


    //get list of products or filtered list of prods if query string specified 
    public function index(Request $req)
    {
        
        
        //v1
        // ?page=1&price=1000-2000&filter_brand=ABOBA1&filter_brand=ABOBA2
        // filter_brand%5B0%5D=3&filter_brand%5B1%5D=449&filter_brand%5B2%5D=2
        // filter_brand[0]=3&filter_brand[1]=449&filter_brand[2]=2

        //v2
        //?page=1&price=1000-2000&brand=brand1-brand5&category=catrgory3-subcategory8&attribute&attrfilter=attr1-value1--attr2-value2

        // looks like shit
        $page = $req->query('page') !== null ? intval($req->query('page')) : 0;


        // if($brands !== null) {
        //     $brand_ids = Brand::where(function($query) use ($brands) {
        //         for($i = 0; $i < count($brands); $i++) {
        //             $query->orWhere('slug', '=', $brands[$i]);
        //             }
        //     })->get();
        //     $brands_array = [];
        //     foreach($brand_ids as $ent) {
        //         array_push($brands_array, $ent->id);
        //     }
        // }

        $price = explode("-", $req->query('price'));
        $categories = explode("-", $req->query('category'));
        $brands = explode("-", $req->query('brand'));
        // ?attribute[attr3]=value22&attribute[truefalseattr-2]=0
        $attribute = $req->query('attribute');

        $list = Product::query();

        

        if($categories !== ['']) {
            $list->whereHas('category', function ($query) use ($categories) {
                $query->whereIn('slug', $categories);
            });
        }

        if($brands !== ['']) {
            $list->whereHas('brand', function ($query) use ($brands) {
                $query->whereIn('slug', $brands);
            });
        }

        if($price !== ['']) {        
            $list->whereHas('variants', function($query) use ($price){
                $query->where('is_primary_variant', true)->where('price', '>=', $price[0])->where('price', '<=', $price[1]);
            });
        }


        if($attribute !== null) {
            $attribute_vals = array_values($attribute);
            $attribute_keys = array_keys($attribute);
            $list->whereHas('attributes', function ($query) use ($attribute_keys, $attribute_vals) {
                foreach($attribute_keys as $key=>$attrkey) {
                    $query->where('slug', $attrkey)->where('value', $attribute_vals[$key]);
                }
            });
        }

        $list = $list->skip($page*12)->with(['variants.discount', 'category', 'brand', 'attributes', 'specs'])->take(12)->get()->toArray();

        foreach($list as &$listelem) {
            $listelem['specs'] = array_column($listelem['specs'], 'title');
        }
        unset($listelem);



        return $list;
    }

    // public function indexWithCategory($category, Request $req) {

    //     $categoryid = optional(Category::where('slug', $category)->first())->id;
    //     if ($categoryid === null) {
    //         return 'Error: no such category';
    //     }
    //     $page = $req->query('page') !== null ? intval($req->query('page')) : 0;
    //     $list = Product::where('category_id', $categoryid)->skip($page*12)->with('variants')->with('category')->take(12)->get();

    //     if(($req->query('pricefrom') !== null) && ($req->query('priceto') !== null)) {
    //         $list = $list->filter(fn($val, $key) => 
    //         (intval($val->variants[0]->price) > intval($req->query('pricefrom')) && (intval($val->variants[0]->price) < intval($req->query('priceto')))));
    //     }

    //     return $list;
    // } 

    //get single one prodcut
    public function getProd($slug) {
        $product = Product::where('slug', $slug)->with('variants:product_id,price,title,is_primary_variant,id')->first();

        return $product;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'vendor_code' => 'required',
            'category_id' => 'required',
            'instorage' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'variants' => 'required',
        ]);
        $data['slug'] = Str::slug($data['title']);

        $prod = Product::create(array_diff_key($data, array('variants' => 1)));

        $validated_vars = json_decode($data['variants'], true);

        foreach($validated_vars as $key=>$variant) {
            $validated_vars[$key]['product_id'] = $prod->id;
            ProductVariants::create($validated_vars[$key]);
        }

        return $prod;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::where('slug', $id)->first();

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'vendor_code' => 'required',
            'category_id' => 'required',
            'instorage' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'variants' => 'required',
        ]);
        $data['slug'] = Str::slug($data['title']);

        $prod = Product::find($id)->update(array_diff_key($data, array('variants' => 1)));

        $validated_vars = json_decode($data['variants'], true);

        foreach($validated_vars as $key=>$variant) {
            $validated_vars[$key]['product_id'] = $id;
            ProductVariants::where('id', $variant['id'])->update($validated_vars[$key]);
        }

        return $prod;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductVariants::where('product_id', $id)->delete();
        return Product::destroy($id);
    }
}
