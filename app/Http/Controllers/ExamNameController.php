<?php

namespace App\Http\Controllers;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Requests\ExamRequest;

class ExamNameController extends Controller
{
    public function exams(){
        $exams = Exam::all();
        return $exams;
    }
    public function exam($id){
        $exams = Exam::find($id);
        return Exam::find($id);
    }
    public function remove($id){
        $result = Exam::find($id)->delete();     
    }
    public function update(ExamRequest $request,$id){
        $exams = Exam::find($id);
        $exams->update(['grade_id'=>$request->grade_id,
                        'exam_type_id'=>$request->exam_type_id,
                        'lesson_id'=>$request->lesson_id]);
        return $exams;  
    }
    public function store(ExamRequest $request){
        Exam::create(['grade_id'=>$request->grade_id,
                      'exam_type_id'=>$request->exam_type_id,
                      'lesson_id'=>$request->lesson_id]); 
        return $request->all();
    }
}
