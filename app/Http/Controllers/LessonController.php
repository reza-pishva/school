<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function lesson($id){
        $lesson = Lesson::find($id);
        return $lesson;
    }

    public function lessons($grade_id){
        return Lesson::where('grade_id',$grade_id)->get();
    }

    public function remove($id){
        $result = Lesson::find($id)->delete();     
    }

    public function update(Request $request , $id){
        $lesson = Lesson::find($id);
        $lesson->update(['lesson_name' => $request->lesson_name,
                         'grade_id' => $request->grade_id]);
        return $lesson;  
    }
    
    public function store(Request $request){
        Lesson::create(['lesson_name' => $request->lesson_name,
                        'grade_id' => $request->grade_id]); 
        return $request->all();
    }
}
