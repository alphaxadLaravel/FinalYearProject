<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = "fields";

    protected $fillable = [
        'student_id',
        'company',
        'department',
        'path',
        'region_id',
        'distict_id',
        'ward_id',
        'status',
    ];
}
