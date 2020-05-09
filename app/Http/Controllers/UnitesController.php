<?php

namespace App\Http\Controllers;

use App\unites;
use App\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnitesController extends Controller
{

    public function index()
    {
        $units=unites::paginate(15);
        return view('admin.units.units')->with(['unites'=>$units] );

    }

public function store(Request $request){
        $request->validate([
           'unites_name'=>'required',
            'unites_code' =>'required',
        ]);
        $unit=new unites();
        $unit->unites_name=$request->input('unites_name');
        $unit->unites_code=$request->input('unites_code');
        $unit->save();
        return redirect()->back();
}
public function delete(Request $request){
    $id=$request->input('id');
    unites::destroy($id);
    return redirect()->back();
}

public function search(Request $request){
$request->validate(['units_search'=>'required']);

$searshterm = $request->input('units_search');
$unit=Unit::where([
    'unites_name','Like ','%'.$searshterm.'%'
])->get();
if(count($unit)>0){
return    view('admin.units.units')->with(['unites'=>$unit, 'showLinks'=>false] );
}    return redirect()->back;


}

}
