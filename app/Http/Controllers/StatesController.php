<?php

namespace App\Http\Controllers;

use App\states;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index(){
        $statues=states::paginate(16);
        return view('admin.states.states')->with([
            'statues'=>$statues
        ]);
    }
}
