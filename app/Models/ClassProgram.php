<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassProgram extends Model
{
    use HasFactory;
    protected $table='class_programs';
    protected $guarded=[];
    public function class_name(){
        $this->hasOne(ClassRoom::class);
    }
    public function lessons(){
        $this->hasMany(Lesson::class);
    }
}
