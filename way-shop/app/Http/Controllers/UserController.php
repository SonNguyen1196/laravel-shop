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
        $userData = DB::table('users')->paginate(10);
        return view('admin.users.users.index', compact('userData'));
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }
    public function destroy(){

    }
}
