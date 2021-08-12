<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class RecordController extends Controller
{
    public function index()
    {
        return view('master.index');
    }
    public function create()
    {
        $datas = Book::get()->all();
        return view('master.book_create',compact('datas'));
    }

    public function store()
    {
        $inputs = \Request::all();
        Book::create($inputs);
        return redirect('record/create');
    }
}
