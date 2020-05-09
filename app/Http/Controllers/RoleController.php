<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role=Role::paginate(15);
        return view('admin.roles.roles')->with(['roles'=>$role]);
    }
}
