<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherLesson extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='teacher_lessons';
    protected $guarded=[];
}
