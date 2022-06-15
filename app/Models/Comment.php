<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    protected $fillable = [
        'student_id',
        'reason',
        'comment',
        'status',
        'faculty_id'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
