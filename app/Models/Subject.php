<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['subject_name', 'subject_id', 'lecturer', 'group'];
    public function courses()
    {
        return $this->hasMany(Course::class, 'subject_id');
    }
}
