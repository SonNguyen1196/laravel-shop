<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect('admin/dashboard')->with('flag_message_suucess', 'Login Susscess');
        } else{
            if($request->isMethod('post')){
                $data = $request->input();
                if(Auth::attempt(['name'=> $data['username'] , 'password' => $data['password']])){
                    return redirect('admin/dashboard')->with('flag_message_suucess', 'Login Susscess');
                } else{
                    return redirect('/admin')->with('flag_message_error', 'Invalid Username or Password');
                }
            }
            return view('admin.admin_login');
        }
        
    }

    public function logout(){
        Auth::logout();
        return view('wayshop.index');
    }
    
    public function dashboard(){
        return view('admin.dashboard');
    }
}
