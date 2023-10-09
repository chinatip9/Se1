<?php

namespace App\Http\Controllers;
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

}
