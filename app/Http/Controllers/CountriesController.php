<?php

namespace App\Http\Controllers;

use App\countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = countries::paginate(15);
        return view('admin.countries.countries')->with([
            'countries' => $countries
        ]);
    }
}
