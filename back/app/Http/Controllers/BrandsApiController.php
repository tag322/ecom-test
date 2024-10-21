<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\Brand;
use App\Models\Product;

class BrandsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req, $brand)
    {

        // /api/brands/brand3?attr7=value68

        $brandinfo = Brand::where('slug', $brand)->with(['attributes'])->first();

        $attrs = $brandinfo->attributes->pluck('slug');
        $filterurl = [];
        foreach($attrs as $attr) {
            if ($req->query($attr) !== null) {
                array_push($filterurl, [$attr, $req->query($attr)]);
            }
        }

        $prodlist = Product::where('brand_id', $brandinfo->id)->whereHas('attributes', function(Builder $query) use ($filterurl) {
            $query->where(function(Builder $query) use ($filterurl) {
                foreach($filterurl as $iter) {
                    $query->orwhere('slug', '=', $iter[0])->where('value', '=', $iter[1]);
                }
            });
        })->with('attributes');
            // ->filter(fn($val, $key) => $val->attributes->);

        $prodlist = $prodlist->get();

        return $prodlist;
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
    public function show(string $id)
    {
        //
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
}
