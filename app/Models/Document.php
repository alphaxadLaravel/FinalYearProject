<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = "documents";
    
    protected $fillable = [
        'faculty_id',
        'user_id',
        'purpose',
        'path',
        'status',
    ];
}
