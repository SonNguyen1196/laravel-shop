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

    public function __construct(User $user){
        $this->user = $user;
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
        $roles =  Role::all();
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
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone= $request->phone;
            $user->password = Hash::make($request->password) ;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->description = $request->description;
            $user->status = $request->status;
            $user->image = $request->image;
            $user->save();
            $user->roles()->attach($request->input('role'));
        }
    }

    public function show($id){
        return view('admin/users.users.show');
    }

    public function edit(){
//        return view('admin.users.users.create');
    }

    public function update(){

    }
    public function destroy(){
        return 'Delete';
    }
}
