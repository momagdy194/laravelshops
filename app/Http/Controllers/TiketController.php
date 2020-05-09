<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(){
        $ticket=Tiket::with(['tikettType','customer','order'])->paginate(env('PAGINATE_COINT'));
        return view('admin.Ticket.ticket')->with(['tickets'=>$ticket]);

    }
}
