<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'student_id',
        'name',
        'warning_type',
        'warning_reason',
        'status',
        'supervisor',
        'created_at',
        '_method'
    ];
    public function notification()
{
    return $this->hasOne(Notification::class);
}
}
