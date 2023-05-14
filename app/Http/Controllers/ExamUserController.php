<?php
namespace App\Http\Controllers;
use App\Models\ExamUser;
use Illuminate\Http\Request;
// use App\Http\Requests\ExamUserRequest;

class ExamUserController extends Controller
{
    public function exams(){
        $exams = ExamUser::all();
        return $exams;
    }
    public function exam($id){
        $exams = ExamUser::find($id);
        return $exams;
    }
    public function remove($id){
        $result = ExamUser::find($id)->delete();     
    }
    public function update(Request $request,$id){
        $exams = ExamUser::find($id);
        $exams->update(['score'=>$request->score,
                        'date_shamsi'=>$request->date_shamsi,
                        'exam_id'=>$request->exam_id,
                        'user_id'=>$request->user_id]);
        return $exams;  
    }
    public function store(Request $request){
        ExamUser::create(['score' => $request->score,
                          'date_shamsi' => $request->date_shamsi,
                          'exam_id' => $request->exam_id,
                          'user_id' => $request->user_id]); 
        return $request;
    }
}
