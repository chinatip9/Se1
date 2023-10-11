<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // HomeController.php



public function home()
{
    if (Auth::check()) {
        return view('home');
    } else {
        return redirect('/login');
    }
}
// Controller
public function index() {
    $subjects = Subject::all(); // ตัวอย่างการดึงข้อมูล Subjects จาก Model
    return view('home', compact('subjects'));
}


}
