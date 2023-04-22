<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class ClassRoom extends Model
{
    use HasFactory;
    
    protected $table='class_rooms';
    protected $guarded=[];

    public function scopeYear($query, $type)
    {
        return $query->where('year', $type);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    // ok
    public function users(){
        return $this->belongsToMany(User::class,'user_to_classes','class_id','user_id','id','id');
    }
    public function lessons(){
        return $this->belongsToMany(Lesson::class,'lesson_to_classes','class_id','lesson_id','id','id');
    }
    public function exams(){
        return $this->belongsToMany(Exam::class,'exam_to_classes','class_id','exam_id','id','id');
    }
    
}
