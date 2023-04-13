<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function students(){
        $student = Student::all();
        return $student;
    }
    public function student($id){
        $student = Student::find($id);
        return $student;
    }
    public function remove($id){
        $result = Student::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $student = Student::find($id);
        $student->update(['father_job' => $request->father_job,
                          'mother_job' => $request->mother_job, 
                          'father_phone_number' => $request->father_phone_number,
                          'mother_phone_number' => $request->mother_phone_number,
                          'address' => $request->address,
                          'consideration' => $request->consideration,
                          'birthday' => $request->birthday,
                          'user_id ' => $request->user_id]);
        return $student;  
    }
    public function store(Request $request){
        Student::create(['father_job' => $request->father_job,
                         'mother_job' => $request->mother_job, 
                         'father_phone_number' => $request->father_phone_number,
                         'mother_phone_number' => $request->mother_phone_number,
                         'address' => $request->address,
                         'consideration' => $request->consideration,
                         'birthday' => $request->birthday,
                         'user_id ' => $request->user_id]); 
        return $request->all();
    }
}
