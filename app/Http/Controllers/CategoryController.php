<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

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

    public function store(CategoryRequest $request)
    {
        $validated = $request->all();
        Category::create($validated);
        return redirect('master/category/create');
    }
}
