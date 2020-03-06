<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Permission;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function  index(){
        $permissions = Permission::all();
        return view('admin.users.permission.index')->with('permissions', $permissions);
    }

    public function  create(){
        return view('admin.users.permission.create');
    }

    public function  store(Request $request){
        $input = $request->all();
        $rules = [
            'name' => 'required|string|max:30|unique:permissions',
            'display_name' => 'required|string|max:30|unique:permissions',
        ];

        $messages = [
            'max'    => 'Please fill :attribute no more 30 characters',
            'unique'    => 'The :attribute has already',
        ];

        $validator = Validator::make($input, $rules, $messages);
        $errors = $validator->errors();
        if ($validator->fails()){
            return redirect()->route('permission.create')->with('errors', $errors);
        }
         else{
             $permission = new Permission();
             $permission->name = $request->input('name');
             $permission->display_name = $request->input('display_name');
             $permission->save();

             return redirect()->route('permission.index')->with('flag_message_success', 'Add Permission Success');
         }

    }

    public function  edit($id){
        $permissions = Permission::findOrFail($id);
        return view('admin.users.permission.edit')->with('permission', $permissions);
    }

    public function  update(Request $request, $id){

        $permission = Permission::findOrFail($id);

        $input = $request->all();
        $rules = [
            'name' => 'required|string|max:30',
            'display_name' => 'required|string|max:30',
        ];

        $messages = [
            'max'    => 'Please fill :attribute no more 30 characters',
        ];

        $validator = Validator::make($input, $rules, $messages);
        $errors = $validator->errors();

        if ($validator->fails()){
            return redirect()
                ->route('permission.edit', ['id' => $id])
                ->with('errors', $errors)
                ->with('permission', $permission);
        }

        else{
            $permission = Permission::findOrFail($id);
            $permission->name = $request->input('name');
            $permission->display_name = $request->input('display_name');
            $permission->save();

            return redirect()->route('permission.index')->with('flag_message_success', 'Update Permission Success');
        }
    }
    public function  destroy($id){
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect()->route('permission.index')->with('flag_message_success', 'Delete '.$permission->display_name.' Success');
    }
}
