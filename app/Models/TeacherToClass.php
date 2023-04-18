<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherToClass extends Model
{
    use HasFactory;
    protected $table='teacher_to_classes';
    protected $guarded=[];
}
