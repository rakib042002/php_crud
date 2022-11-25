<?php

namespace App\Http\Controllers;

use App\Models\AddStudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private static $students,$student;

    public function addStudent()
    {
        return view('front.student.add-student');
    }

    public function saveStudent(Request $request)
    {
        AddStudent::addStudent($request);
        return redirect()->back()->with('massege','Student added successfully');
    }

    public function manageStudent()
    {
        self::$students=AddStudent::all();
        return view('front.student.manage-student',["students"=>self::$students]);
    }
    public function editStudent($id)
    {
        self::$student = AddStudent::find($id);
        return view('front.student.edit-student',["student"=>self::$student]);
    }
    public function updateStudent(Request $request, $id)
    {
        AddStudent::updateStudent($request, $id);
        return redirect('manage-student')->with("massege",'upgrade sucessfully');
    }
    public function deleteStudent($id)
    {
        AddStudent::deleteStudent($id);
        return redirect('manage-student')->with("massege",'delete sucessfully');
    }
}
