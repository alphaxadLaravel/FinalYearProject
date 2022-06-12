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
        'district_id',
        'ward_id',
        'status',
        'faculty_id',
    ];

    // Field has many regions
    public function region(){
        return $this->belongsTo(Region::class);
    }

   // Field has many districts
    public function district(){
        return $this->belongsTo(District::class);
    }

    // Field has many wards
    public function ward(){
        return $this->belongsTo(Ward::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
