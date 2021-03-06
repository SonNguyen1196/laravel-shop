<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    private $user;
    private $role;

    public function __construct(User $user, Role $role){
        $this->user = $user;
        $this->role = $role;
    }

    public function index(){
        $userData = DB::table('users')->get();
        return view('admin.users.users.index', compact('userData'));
    }

    public function getUsers(){
        $users = DB::table('users')->select(['id','image','name', 'email', 'status', 'phone', 'status']);

//        return DataTables::queryBuilder($query)->toJson();
        return Datatables::of($users)->addColumn('action', function ($user) {
            $eventSubmit = 'onclick=" confirm(\'Are you sure you want to Delete '.$user->name.'\'); event.preventDefault();document.getElementById(\'delete-role-'.$user->id.'\').submit();"';
            $formDelete = '<form id="delete-role-'.$user->id.'" action="'. route('user.destroy', ['id' => $user->id]) .'" method="POST" style="display: none;"> '.@csrf_field().'</form>';
            return '<a href="'.route('user.show', ['id' => $user->id]).'" class="btn btn-success w-sm m-b-5"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a href="'.route('user.edit', ['id' => $user->id]).'" class="btn btn-primary w-sm m-b-5"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="'.route('user.destroy', ['id' => $user->id]).'" '.$eventSubmit.'class="btn btn-danger w-sm m-b-5" ><i class="glyphicon glyphicon-trash"></i> Delete</a>'.$formDelete;
        })->make();
    }

    public function create(){
        $roles =  $this->role->all();
        return view('admin.users.users.create', compact('roles'));
    }

    public function store(Request $request){
        $input = $request->all();

        $rules = [
            'name' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:10|unique:users',
            'password' => 'required|confirmed|string|min:8',
            'status' => 'required|in:0,1',
            'role' => 'required',
            'image' => 'required',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            $errors= $validator->errors();
            return redirect()->route('user.create')->with('errors', $errors);
        }else{
            $pathImageUrl = parse_url($request->image)['path'];
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone= $request->phone;
            $user->password = Hash::make($request->password) ;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->description = $request->description;
            $user->status = $request->status;
            $user->image = $pathImageUrl;
            $user->save();
            $user->roles()->attach($request->input('role'));

            return redirect()->route('user.index')->with('flag_message_success', 'Add User Success');
        }
    }

    public function show($id){
        $user = $this->user->find($id);
        $roleOfusers = $user->roles->pluck('display_name')->toArray();
        return view('admin/users.users.show', compact('user', 'roleOfusers'));
    }

    public function edit($id){
        $userInfo = $this->user->find($id);
        $roleOfUsers = $userInfo->roles;
        $roles = Role::all();
        return view('admin.users.users.edit', compact('userInfo', 'roleOfUsers', 'roles'));
    }

    public function update($id, Request $request){

        $input = $request->all();
        $user = User::findOrFail($id);

        $rules = [
            'name' => 'required|string|unique:users,name,' .$user->id,
            'email' => 'required|email|unique:users,email,' .$user->id,
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:10|unique:users,phone,' .$user->id,
            'oldPassword' => 'required|string|min:8',
            'password' => 'required|confirmed|string|min:8',
            'status' => 'required|in:0,1',
            'role' => 'required',
            'image' => 'required',
        ];

        $validator = Validator::make($input, $rules);

        if (Hash::check($request->oldPassword, $user->password) == false) {
            $validator->errors()->add('oldPassword', 'Your old password is incorrect.');
        }


        if ($validator->fails()){
            $errors= $validator->errors();
            return redirect()->route('user.edit',  ['id' => $user->id])->with('errors', $errors);
        }else{
            $pathImageUrl = parse_url($request->image)['path'];
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone= $request->phone;
            $user->password = Hash::make($request->password) ;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->description = $request->description;
            $user->status = $request->status;
            $user->image = $pathImageUrl;
            $user->save();
            $user->roles()->detach();
            $user->roles()->attach($request->input('role'));

            return redirect()->route('user.index')->with('flag_message_success', 'Update User Success');
        }

    }
    public function destroy($id){
        $user= User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('user.index')->with('flag_message_success', 'Delete Role Success');
    }
}
