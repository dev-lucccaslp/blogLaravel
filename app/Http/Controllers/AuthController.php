<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        if(Auth::check()) {
            return redirect()->route('blog');
        }

        return view('login');
    }

    public function login_action(Request $request) {
        $validator = $request -> validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);

         if(Auth::attempt($validator)) {
            return redirect()->route('blog');
         }

     }

    public function register(){
        if(Auth::check()) {
            return redirect()->route('blog');
        }

        return view('register');
    }

    public function register_action(Request $request) {

        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data= $request->only('name','email','password');// acessando dados passados

        $data['password'] = Hash::make($data['password']);// sobrescrevendo password para ser criptografado

        User::create($data);

       return redirect(route('login'));

    }

    public function logout() {
        Auth::logout();

        return redirect(route('home'));
    }
}
