<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";
    
    protected $fillable = [
        'faculty_id',
        'course',
        'status',
    ];

    // Course has many students
    public function student(){
        return $this->hasMany(Student::class);
    }

    // 

}
