<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassRoom;
use App\Models\Lesson;


class Grade extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table='grades';
    protected $guarded=[];


    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function classes(){
        return $this->hasMany(ClassRoom::class);
    }
}
