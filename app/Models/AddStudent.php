<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddStudent extends Model
{
    use HasFactory;
    private static $student,$students;


    public static function addStudent($request)
    {
        self::$student                  = new AddStudent();
        self::$student['student_name']  = $request['student_name'];
        self::$student['number']        = $request['number'];
        self::$student['email']         = $request['email'];
        self::$student->save();
    }
    public static function updateStudent($request, $id){
        self::$student = AddStudent::find($id);
        self::$student['student_name']  = $request['student_name'];
        self::$student['number']        = $request['number'];
        self::$student['email']         = $request['email'];
        self::$student->save();
    }
    public static function deleteStudent($id)
    {
        self::$student = AddStudent::find($id);
        self::$student->delete();
    }
}
