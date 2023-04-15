<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherLesson;

class TeacherLessonController extends Controller
{
    public function getYear(){
        $date = \Morilog\Jalali\Jalalian::now();
        $year = substr($date,0,4); 
        $month = substr($date,5,2); 
        $day = substr($date,8,2); 
        if($month<4){
          return $year-1; 
        }
        return $year;
    }

    public function lessons(){
        $lessons = TeacherLesson::all();
        return TeacherLesson::all();
    }

    public function currentLessons(){
        $year = $this->getYear();
        $lessons = TeacherLesson::year($year)->get();
        return $lessons;        
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
