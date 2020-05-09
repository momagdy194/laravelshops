<?php

namespace App\Http\Controllers\Api;
use App\Product;
use App\categories;

use App\Http\Resources\ProductResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return ProductResource::collection(Product::paginate());
    }}
