<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $product=Product::with(['category','images'])->paginate(env('PAGINATE_COUNT','16'));
        $currency_code =env('CURRENT_CODE','$');

        return view('admin.products.product')->with([
            'products'=>$product,
            'currency_code'=>$currency_code,

        ]);
    }
}
