<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervision extends Model
{
    use HasFactory;

    protected $table = "supervisions";

    protected $fillable = [
        'student_id', 
        'staff_id',
        'faculty_id',
        'status'
    ];
    
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }
}
