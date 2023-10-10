<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory;
    use SoftDeletes; // เพิ่ม SoftDeletes trait

    protected $fillable = ['first_name', 'last_name', 'major', 'student_id'];

}
