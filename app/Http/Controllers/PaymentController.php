<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index(){
        $payment=Payment::paginate(15);
        return view('admin.payments.payment')->with(['payments'=>$payment]);
    }
}
