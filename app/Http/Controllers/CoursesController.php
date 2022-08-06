<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
  
    public function index()
    {
        //
        $data['courses'] = Courses::all();
        return view("admin/manageCourse",$data);
    }

    public function create()
    {
        return view("admin.insertCourse");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'fee' => 'required',
            'discount_fee' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        Courses::create($data);
        return redirect()->route('courses.index');


    }

    public function show(Courses $courses)
    {
        //
    }

    public function edit(Courses $courses)
    {
        $data['courses'] = $courses;
        return view("admin/editCourse",$data);
    }

    public function update(Request $request, Courses $courses)
    {
        $data = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'fee' => 'required',
            'discount_fee' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $courses->update($data);
        return redirect()->route('courses.index');
    }

    public function destroy(Courses $courses)
    {
        $courses->delete();
        return redirect()->route('courses.index');
    }
}