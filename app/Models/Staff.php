<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $table = "staff";

    protected $fillable = [
        'user_id',
        'faculty_id',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phone',
        'status',
    ];
}
