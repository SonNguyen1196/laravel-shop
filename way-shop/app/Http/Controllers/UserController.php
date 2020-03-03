<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\User;
use Illuminate\Support\Facades\DB;
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
        $users = DB::table('users')->select(['id', 'image','name', 'email', 'phone', 'address', 'city', 'status']);


        return Datatables::of($users)->addColumn('action', function ($user) {
            $eventSubmit = 'onclick=" confirm(\'Are you sure you want to Delete '.$user->name.'\'); event.preventDefault();document.getElementById(\'delete-role-'.$user->id.'\').submit();"';
            $formDelete = '<form id="delete-role-'.$user->id.'" action="'. route('user.destroy', ['id' => $user->id]) .'" method="POST" style="display: none;"> '.@csrf_field().'</form>';
            return '<a href="'.route('user.show', ['id' => $user->id]).'" class="btn btn-success w-sm m-b-5"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a href="'.route('user.edit', ['id' => $user->id]).'" class="btn btn-primary w-sm m-b-5"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="'.route('user.destroy', ['id' => $user->id]).'" '.$eventSubmit.'class="btn btn-danger w-sm m-b-5" ><i class="glyphicon glyphicon-trash"></i> Delete</a>'.$formDelete;
        })->make();
    }

    public function create(){
        return 'crete';
    }

    public function store(){

    }

    public function show($id){
        return view('admin/users.users.show');
    }

    public function edit(){
        return 'Edit';
    }

    public function update(){

    }
    public function destroy(){
        return 'Delete';
    }
}
