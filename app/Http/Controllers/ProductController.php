<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $slug = Str::slug($request->input('slug'));

        return Product::create([
            'name' => $name,
            'slug' => $slug,
        ]);
    }

    public function show(string $id)
    {
        return Product::findOrFail($id);
    }
}
