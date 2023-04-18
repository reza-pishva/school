<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;

class TeacherLesson extends Model
{
    use HasFactory;
    protected $table="";
    protected $guarded=[];

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
