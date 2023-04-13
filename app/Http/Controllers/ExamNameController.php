<?php

namespace App\Http\Controllers;
use App\Models\Exam;
use Illuminate\Http\Request;

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
    public function update(Request $request , $id){
        $exams = Exam::find($id);
        $exams->update(['grade_id'=>$request->grade_id,
                        'exam_type_id'=>$request->exam_type_id,
                        'exam_name'=>$request->exam_name]);
        return $exams;  
    }
    public function store(Request $request){
        Exam::create(['grade_id'=>$request->grade_id,
                      'exam_type_id'=>$request->exam_type_id,
                      'exam_name'=>$request->exam_name]); 
        return $request->all();
    }
}
