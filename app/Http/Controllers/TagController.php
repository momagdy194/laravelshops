<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tag=Tag::paginate(16);
        return view('admin.tags.tags')->with([
            'tags'=>$tag
        ]);}

        public function store(Request $request){
            $request->validate([
                'tag'=>'required'
            ]);
            $tagName=new Tag();
            $tagName->tag=$request->input('tag');
            $tagName->save();
            return redirect()->back();
        }
    




}
