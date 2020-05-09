<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories=categories::paginate();
        return view('admin.categories.categories')->with([
            'categories' => $categories,
        ]);
    }
}
