<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherLesson extends Model
{
    use HasFactory;
    protected $table='teacher_lessons';
    protected $guarded=[];

    public function lessons(){
        $this->hasMany(Lesson::class);
    }

    public function scopeYear($query, $type)
    {
        return $query->where('year', $type);
    }
}
