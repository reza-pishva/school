<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\ExamType;
use App\Grade;


class Exam extends Model
{
    use HasFactory;

    protected $table='exams';
    protected $guarded=[];
    public function examtype(){
        $this->belongsTo(ExamType::class);
    }
    public function grade(){
        $this->belongsTo(Grade::class);
    }

}
