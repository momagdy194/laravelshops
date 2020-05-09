<?php

namespace App\Http\Controllers;

use App\cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        $cities=cities::paginate(15);
        return view('admin.cities.cities')->with(['cities'=>$cities]);
    }
}
