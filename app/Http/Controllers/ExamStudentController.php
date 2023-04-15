<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamStudent;

class ExamStudentController extends Controller
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


    public function exams(){
        $exams = ExamStudent::all();
        return $exams;
    }

    public function currentExams(){
        $year = $this->getYear();
        $exams = ExamStudent::year($year)->get();
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
