<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $students = Student::all();
        return view('student', compact('students'));
    }
    public function store(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->input('first_name'); // แก้จาก 'name' เป็น 'first_name'
    $student->last_name = $request->input('last_name'); // เพิ่มฟิลด์ 'last_name'
    $student->major = $request->input('major'); // เพิ่มฟิลด์ 'major'
    $student->student_id = $request->input('student_id'); // เพิ่มฟิลด์ 'student_id'

    $student->save(); // บันทึกข้อมูล
    return redirect()->route('students.create')->with('success', 'นักศึกษาถูกเพิ่มเรียบร้อยแล้ว');

}

public function create(){
    return view ('/addstudent');
}
}