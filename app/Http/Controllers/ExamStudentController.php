<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamStudent;

class ExamStudentController extends Controller
{
    public function exams(){
        $exams = ExamStudent::all();
        return $exams;
    }
    public function exam($id){
        $exams = ExamStudent::find($id);
        return ExamStudent::find($id);
    }
    public function remove($id){
        $result = ExamStudent::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $exams = ExamStudent::find($id);
        $exams->update(['year'=>$request->year,
                        'date_shamsi'=>$request->date_shamsi,
                        'exam_id'=>$request->exam_id,
                        'user_id'=>$request->user_id]);
        return $exams;  
    }
    public function store(Request $request){
        ExamStudent::create(['year'=>$request->year,
                            'date_shamsi'=>$request->date_shamsi,
                            'exam_id'=>$request->exam_id,
                            'user_id'=>$request->user_id]); 
        return $request->all();
    }
}
