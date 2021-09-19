<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        $datas = Book::get()->all();
        $categories = Category::get()->all();
        return view('master.book_create',compact('datas', 'categories'));
    }

    public function store(BookRequest $request)
    {
        $validated = $request->except('image');
        
        $imagefile = $request->file('image');
    
        $temp_path = $imagefile->store('public/temp');
        // dd($temp_path);
        $validated['image'] = basename($temp_path);

        Book::create($validated);
        return redirect('master/book/create');
    }
}
