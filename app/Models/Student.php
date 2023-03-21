<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'student_id',
        'name',
        'phone',
        'dorm_joined',
        'room_number',
        'room_type',
        'date_joined',
        '_method'
    ];
}
