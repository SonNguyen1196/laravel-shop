<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function index(){
        return view('admin.medias.index');
    }
}
