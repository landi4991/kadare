<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('web');
    }
    
    public function show()
    {
        $category=Category::all();

        return view('libra.kategori',compact('category'));  
        }

    
    public function createCategory()
    {
        return view('libra.krijo_kategori');
    }
    
    
    public function add(Request $request)
    {
       
          $category = new Category;
          $category->category = $request->category;
          $category->save();

        return redirect('/kategori');
    }

}
