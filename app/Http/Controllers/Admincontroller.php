<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{student,User};

class Admincontroller extends Controller
{
    public function dashboard(){
        $data['total_students'] = student::all()->count();
        $data['total_users'] = user::all()->count();
        return view("admin/dashboard",$data);
    }
    public function manageuser(){
        $data['users'] = User::all();
        return view("admin/manageusers",$data);
    }
    public function managestudent(){
        $data['students'] = student::all();
        return view("admin/managestudents",$data);
    }
}
