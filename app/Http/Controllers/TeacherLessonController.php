<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherLesson;

class TeacherLessonController extends Controller
{
    public function lessons(){
        $lessons = TeacherLesson::all();
        return TeacherLesson::all();
    }
    public function lesson($id){
        $lessons = TeacherLesson::find($id);
        return TeacherLesson::find($id);
    }
    public function remove($id){
        $result = TeacherLesson::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $lessons = TeacherLesson::find($id);
        $lessons->update(['year'=>$request->year,
                          'lesson_id'=>$request->lesson_id]);
        return $lessons;  
    }
    public function store(Request $request){
        TeacherLesson::create(['year'=>$request->year,
                               'lesson_id'=>$request->lesson_id]); 
        return $request->all();
    }
}
