<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class CategoryController extends Controller
{
       public function index()
    {
    }
    public function create()
    {
        $categories = Category::get()->all();
        return view('master.category_create',compact('categories'));
    }

    public function store()
    {
        $inputs = \Request::all();
        // dd($inputs);
        Category::create($inputs);
        return redirect('master/category/create');
    }
}
