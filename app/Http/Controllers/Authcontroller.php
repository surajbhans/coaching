<?php

namespace App\Http\Controllers;
use  App\Models\user;

use Illuminate\Http\Request;

//use Hash;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\Auth;

class Authcontroller extends Controller
{
    public function teacherlogin(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
           
            $auth = $req->only('email','password');
            if(Auth::attempt($auth)){
                return redirect()->route("student.index");
            }
            else{
                $req->session()->flash("error","login with incorrect details try again");
                return redirect()->back();
            }
        }

        return view("auth.login");
    }
    public function signup(Request $req){
        if($req->isMethod("post")){
           $req->validate([
'name' => 'required',
'contact' => 'required',
'email' => 'required:email|unique:users',
'password' => 'required|min:6'
           ]);
           $user = new user();
           $user -> name = $req->name;
           $user -> contact = $req->contact;
           $user -> email = $req->email;
           $user -> email = $req->email;
           $user -> password = Hash::make($req->password);
           $user->save();
           return redirect()->route("login");
          
       }
       else{
           return view("auth.signup");
       }
    }
    public function  reset_password(){

    }
    public function  forget_password(){

    }
    public function  verify(){

    }
    public function  logout(Request $req){
        $req->session()->flush();
        Auth::logout();

        return redirect()->route("login");

    }
}
