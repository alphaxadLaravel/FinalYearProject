<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";

    protected $fillable = [
        'IDNumber',
        'password',
        'faculty_id',
        'status',
    ];

    // user ha sone student
    public function student(){
        return $this->hasOne(Student::class);
    }

    public function staff(){
        return $this->hasOne(Student::class);
    }
}
