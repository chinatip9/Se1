<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::all();
    return view('course', ['courses' => $courses]);
}
       
    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('addcourse', compact('students', 'subjects'));
    }
    public function store(Request $request){
        try {
            // Your code to save the data goes here
    
            $course = new Course();
            $course->student_id = $request->input('student');
            $course->subject_id = $request->input('subject');
            $course->save();
    
            return redirect()->route('courses.create')->with('success', 'จัดการคอร์สเรียบร้อยแล้ว');
        } catch (\Exception $e) {
            // Log the exception
            // \Log::error($e->getMessage());
    
            // Optionally, you can redirect to an error page or return an error message
            return redirect()->route('courses.create')->with('error', 'An error occurred while saving the data.');
        }
    }
}