<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class MasterController extends Controller
{
    public function index()
    {
        return view('master.index');
    }
}
