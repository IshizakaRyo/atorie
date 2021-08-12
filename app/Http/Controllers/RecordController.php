<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class RecordController extends Controller
{
    public function index()
    {
        return view('master.index');
    }
    public function create()
    {
        $datas = Book::get()->all();
        $categories = Category::get()->all();
        return view('master.book_create',compact('datas', 'categories'));
    }

    public function store()
    {
        $inputs = \Request::all();
        // dd($inputs);
        Book::create($inputs);
        return redirect('record/create');
    }
}
