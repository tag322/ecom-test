<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class CategoriesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        // $categories = explode("-", $category);
        // $list = Category::where(function($query) use ($categories) {
        //     for($i = 0; $i < count($categories); $i++)
        //         {
        //         $query->orWhere('slug', '=', $categories[$i]);
        //         }
        // })->with('products')->get();
        // function getprodlist($arr) {
        //     $result = collect();
        //     foreach($arr as $elem) {
        //         $result->push(...$elem['products']);
        //     }
        //     return $result;
        // }
        // return getprodlist($list);

        $categories = Category::with(['attributes.type' => function($query) {
            $query->select(['id', 'title']);
        }])->get()->toArray();

        foreach($categories as &$category) {
            foreach($category['attributes'] as &$attribute) {
                $attribute['type'] = $attribute['type']['title']; 
            }
                
        }
        unset($attribute);
        
        return $categories;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category)
    {
        $categinfo = Category::where('slug', $category)->with(['attributes'])->first();

        $attrs = $categinfo->attributes->pluck('slug');
        $filterurl = [];
        foreach($attrs as $attr) {
            if ($req->query($attr) !== null) {
                array_push($filterurl, [$attr, $req->query($attr)]);
            }
        }

        $prodlist = Product::where('category_id', $categinfo->id)->whereHas('attributes', function(Builder $query) use ($filterurl) {
            $query->where(function(Builder $query) use ($filterurl) {
                foreach($filterurl as $iter) {
                    $query->orwhere('slug', '=', $iter[0])->where('value', '=', $iter[1]);
                }
            });
        })->with('attributes');

        $fbrands = null;

        if($req->query('brand') !== null) {
            $fbrands = explode('-', $req->query('brand'));
            $fbrands = Brand::whereIn('slug', $fbrands)->get()->pluck('id');

            $prodlist->whereIn('brand_id', $fbrands);
        }

        

        $prodlist = $prodlist->get();

        return $prodlist;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function product_counter($id) {
        $ids = explode('-', $id);
        $counts = [];
        foreach($ids as $i) {
            array_push($counts, Product::query()->where('category_id', $i)->count());
        }
        return $counts;
    }

    public function test() {
        // $products = Product::select('id', 'category_id')->get()->toArray();

        // $categories = Category::select('id')->with('attributes:category_id,id,slug', 'products')->get()->toArray();
        
        // foreach ($categories as &$category) {
        //     $attrslist = [];
        //     foreach ($category['attributes'] as $attr) {
        //         array_push($attrslist, ['id' => $attr['id'], 'slug' => $attr['slug']]); 
        //     }
        //     $category['attributes'] = $attrslist;
        // }
        // unset($category);
        // foreach ($categories as &$category) {
        //     $category['products'] = array_column($category['products'], 'id');
        // }
        // unset($category);

        // return $categories;
        $categories = Category::with(['attributes.type' => function($query) {
            $query->select(['id', 'title']);
        }])->get()->toArray();

        foreach($categories as &$category) {
            foreach($category['attributes'] as &$attribute) {
                $attribute['type'] = $attribute['type']['title']; 
            }
                
        }
        unset($attribute);
        
        return $categories;
    }

    public function category_attrs($slug) {
                // $attrs = Category::where('id', $id)->with(['attributes:id,slug,category_id', 'attributes.values'])->first();
        // $attrs = $attrs->attributes->pluck('values.*.value', 'slug');

        $attrs = Category::where('slug', $slug)->with(['attributes.type' => function($query) {
            $query->select(['id', 'title']);
        }, 'attributes.values'])->first()->toArray();

        

            foreach($attrs['attributes'] as &$attribute) {
                $attribute['type'] = $attribute['type']['title']; 
                $attrs_id_list = [];
                foreach($attribute['values'] as $val) {
                    array_push($attrs_id_list, $val['value']);
                }
                $attribute['values'] = $attrs_id_list;
            }                
        
        unset($attribute);
        
        return $attrs;
    }

    public function aboba($slug) {
        $product = Product::where('slug', $slug)->first();

        return $product;
    }
}
