<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'roll_no',
        'serial_no',
        'student_name',
        'father_name',
        'registration_no',
        'college_name',
        'program_duration',
        'program_name',
        'obtained_marks',
        'total_marks',
        'grade',
        'award_date',
        'printed_date',
        'photo_path'
    ];

    protected $casts = [
        'award_date' => 'date',
        'printed_date' => 'date',
    ];
}