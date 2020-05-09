<?php

namespace App\Http\Controllers;

use App\shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        $shipment=shipment::paginate(15);
        return view('admin.shipment.shipment')->with(['shipments'=>$shipment]);
    }
}
