<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index(Request $request){

        $Authuser = Auth::user();
        return view('blog', ['AuthUser' => $Authuser]);
    }

    public function create(){

    }

    public function edit(){

    }

    public function delete(){

    }
}
