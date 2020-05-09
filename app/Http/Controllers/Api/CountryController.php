<?php

namespace App\Http\Controllers\Api;
use App\countries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return countries::paginate();
    }
    // public function showstates($id)
    // {
    //     return CountryResourc::collection(countries::paginate());
    // }
    // public function showCites($id)
    // {
    //     return CountryResourc::collection(countries::paginate());
    // }
}
