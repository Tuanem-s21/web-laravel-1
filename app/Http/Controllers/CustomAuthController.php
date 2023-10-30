<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function registerUser(Request $Request){
        $Request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12|confirmed',
        ]);

        $user = new User();
        $user->firstname=$Request->firstname;
        $user->lastname=$Request->lastname;
        $user->email=$Request->email;
        $user->password=Hash::make($Request->password);
        $res=$user->save();
        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function loginUser(Request $Request){
        $Request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);

        $user = User::where('email','=',$Request->email)->first();
        if($user){
            if(Hash::check($Request->password, $user->password)){
                $Request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Password not matches.');
            }
        }else{
            return back()->with('fail', 'This emai is not registered.');
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('admin.dashboard.dashboard_1', compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function forgot(){
        return view('auth.forgot-password');
    }
}
