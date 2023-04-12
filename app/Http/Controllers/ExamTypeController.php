<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;
use App\Models\ClassRoom;
use App\Models\Lesson;

class ExamTypeController extends Controller
{
    public function examTypes(){
        $grade = ExamType::all();
        return ExamType::all();
    }
    public function examType($id){
        $grade = ExamType::find($id);
        return ExamType::find($id);
    }
    public function remove($id){
        $result = ExamType::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $exam = ExamType::find($id);
        $exam->update(['exam_type'=>$request->exam_type]);
        return $grade;  
    }
    public function store(Request $request){
        Grade::create(['exam_type' => $request->exam_type]); 
        return $request->all();
    }
}
