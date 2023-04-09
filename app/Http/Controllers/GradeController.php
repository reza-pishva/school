<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\ClassRoom;
use App\Models\Lesson;

class GradeController extends Controller
{
    public function grades(){
        dd(Grade::all());
    }
    public function lessons($id){
        dd(Grade::find($id)->lessons);
    }
    public function lesson($id,$id_lesson){
        dd(Grade::find($id)->lessons[$id_lesson]['lesson_name']);
    }
    public function classes($id){
        dd(Grade::find($id)->classes);
    }
    public function class_name($id,$id_class){
        dd(Grade::find($id)->lessons[$id_class]['lesson_name']);
    }
}
