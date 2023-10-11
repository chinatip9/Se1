<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/home', [HomeController::class, 'home'])->name('home'); // Change this line
});

//student
Route::get('/addstudent', [StudentController::class, 'create'])->name('students.create');
Route::post('/students',[StudentController::class,'store'])->name('students.store');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

//subject
Route::get('/addsubject', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects',[SubjectController::class,'store'])->name('subjects.store');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');


 //  Course
 Route::get('/addcourse', [CourseController::class, 'create'])->name('courses.create');
 Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
 Route::get('/courses/{sub_id}', [CourseController::class, 'index'])->name('courses.index');
 Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

 Route::get('/home', [HomeController::class, 'index'])->name('index');