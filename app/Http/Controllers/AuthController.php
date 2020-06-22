<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //dd(Auth::attempt(['email' => $request->email, 'password' => $request->password, true]));

        //$credentials = $request->only('email', 'password');
        //dd(Auth::attempt($credentials));

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        //return Redirect::to("/login")->withSuccess('Oppes! You have entered invalid credentials');
        return redirect('/login');
    }

    public function dashboard(){

        if(Auth::check()){
            return view('/dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('/login');
    }

    public function registration(){
        return view('registration');
    }

    public function postRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
