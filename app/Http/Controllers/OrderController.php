<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){
    $order=Order::paginate(15);
    return view('admin.orders.order')->with(['orders'=>$order]);
}
}
