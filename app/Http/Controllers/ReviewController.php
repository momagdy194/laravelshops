<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
public function index(){
    $reviews=Review::with('customer','product')->paginate(16);
   return view('admin.reviews.review')->with([/*that go to the review.blad to intial in aray */ 'reviews'=>$reviews]);
}
}
