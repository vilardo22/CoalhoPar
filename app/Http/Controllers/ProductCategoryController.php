<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($productId)
    {
        return Category::whereHas('products', function($query)use($productId){
            $query->where('id', $productId);
        })->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId)
    {
     $product = Product::findOrfail($productId);

        return $product->categories()->attach($request->input('category_id'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
