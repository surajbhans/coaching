<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\support\facades\Auth;

class StudentController extends Controller
{

    public function index()
    {
        $data['checkstudent'] = student::where("user_id", Auth::id())->first();
        return view("studentpanel.profile", $data);
    }


    public function create()
    {
        if(student::where("user_id",Auth::id())->exists()){
            return redirect()->route('student.index');
        }
        $data['user'] = Auth::user();
        return view("public.apply",$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'education' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);
        $data = new student();
        $data->user_id = Auth::id();
        $data->father_name = $request->father_name;
        $data->mother_name = $request->mother_name;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->education = $request->education;
        $data->save();
        return redirect()->route("student.index");
    }


    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }


    public function destroy(Student $student)
    {
        //
    }
}
