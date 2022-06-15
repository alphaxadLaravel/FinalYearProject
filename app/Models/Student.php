<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = "students";

    protected $fillable = [
        'student_id',
        'firstname',
        'midlename',
        'IDNumber',
        'lastname',
        'course_id',
        'year',
        'level',
        'email',
        'phone',
        'status',
    ];

    // Student belongd to a course
    public function course(){
        return $this->belongsTo(Course::class);
    }

    // Student belongd to user
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function field(){
        return $this->hasOne(User::class);
    }

    public function supervision(){
        return $this->hasOne(Supervision::class);

    }

    public function comment(){
        return $this->hasMany(Comment::class);

    }
}
