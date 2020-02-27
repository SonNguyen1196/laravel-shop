<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function  index(){
        $permissions = Permission::paginate(10);
        return view('admin.users.permission.index')->with('permissions', $permissions);
    }

    public function  create(){
        return view('admin.users.permission.index')->with('permissions', $permissions);
    }

    public function  store(){

    }

    public function  edit(){

    }
    public function  update(){

    }
    public function  destroy(){

    }
}
