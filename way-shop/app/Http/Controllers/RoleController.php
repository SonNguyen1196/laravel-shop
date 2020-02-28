<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function index(){
        $roles = Role::paginate(10);
        return view('admin.users.roles.index', ['roles' => $roles]);
    }

    public function create(){
        $permissions = Permission::all();
        return view('admin.users.roles.create', ['permissions' => $permissions]);
    }

    public function store(Request $request){
        $input = $request->all();
        $rules = [
            'name' => 'required|string|max:30|unique:roles',
            'display_name' => 'required|string|max:30|unique:roles',
            'role_permission' => 'required|array|min:1',
            'role_permission.*' => 'required|numeric|min:1',
        ];

        $messages = [
            'max'    => 'Please fill :attribute no more 30 characters',
            'unique'    => 'The :attribute has already',
            'role_permission.required'    => 'Please choose a permission',
        ];

        $validator = Validator::make($input, $rules, $messages);
        $errors = $validator->errors();
        if ($validator->fails()){
            return redirect()->route('role.create')->with('errors', $errors);
        }
        else {
            $roles = new Role();
            $roles->name = $request->input('name');
            $roles->display_name = $request->input('display_name');
            $roles->save();
            $roles->permissions()->attach( $request->input('role_permission'));
            return redirect()->route('role.index')->with('flag_message_success', 'Add Role Success');
        }

    }

    public function show($id){
        $roleObjs = Role::find($id);
        $getAllPermissionOfRoles = $roleObjs->permissions;
//        $getAllPermissionOfRole = DB::table('role_permission')->where('role_id', $id)->get();
        return view('admin.users.roles.show', compact('roleObjs', 'getAllPermissionOfRoles'));
    }

    public function edit($id){
        $roleObjs = Role::find($id);
        $permissions = Permission::all();
        return view('admin.users.roles.edit', compact('roleObjs', 'getAllPermissionOfRoles', 'permissions'));
    }

    public function update($id){
        return $id;
    }

    public function destroy(){

    }
}
