<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = "students";

    protected $fillable = [
        'regNumber',
        'firstname',
        'midlename',
        'lastname',
        'course_id',
        'faculty_id',
        'year',
        'level',
        'email',
        'phoneNumber',
        'status',
    ];

    // Student belongd to a course
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
