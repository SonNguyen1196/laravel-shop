<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Permission;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function  index(){
        $permissions = Permission::paginate(10);
        return view('admin.users.permission.index')->with('permissions', $permissions);
    }

    public function  create(){
        return view('admin.users.permission.create');
    }

    public function  store(Request $request){
        $input = $request->all();
        $rules = [
            'name-permission' => 'required|string|max:30',
            'display-name-permission' => 'required|string|max:30',
        ];

        $messages = [
            'max'    => 'Please fill :attribute no more 30 characters',
        ];

        $validator = Validator::make($input, $rules, $messages);
        $errors = $validator->errors();
        if ($validator->fails()){
            return redirect()->route('permission.create')->with('errors', $errors);
        }
         else{
             $permission = new Permission();
             $permission->name = $request->input('name-permission');
             $permission->display_name = $request->input('display-name-permission');
             $permission->save();

             return redirect()->route('permission.index')->with('flag_message_success', 'Add Permission Success');
         }

    }

    public function  edit(){

    }
    public function  update(){

    }
    public function  destroy(){

    }
}
