<?php

namespace App\Http\Controllers\Api;
use App\categories;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriesResource;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index (){
        return CategoriesResource::collection(categories::paginate());
    }
}
