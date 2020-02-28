<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    private $roles;
    private $permissions;

    public function __construct(Role $roles){
        $this->roles = $roles;
    }

    public function index(){
        $roles = $this->roles->paginate(10);
        return view('admin.users.roles.index', ['roles' => $roles]);
    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
