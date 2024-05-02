<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       return Category::all();     
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $slug = \Str::slug($request->input('slug'));
        
        
        


       return Category::create([
        'name'=>$name,
        'slug'=>$slug,
      
       

       ]);     
    }
    

    public function show(string $Uuid)
    {
        return Category::findOr($Uuid, fn()=> abort(404, "Categoria nao encontrada"));
    }
}
