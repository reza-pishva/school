<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentToClass;

class StudentClassController extends Controller
{
    public function students(){
        $students = StudentToClass::all();
        return $students;
    }
    public function student($id){
        $students = StudentToClass::find($id);
        // return StudentToClass::find($id);
        return $students;
    }
    public function remove($id){
        $result = StudentToClass::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $students = StudentToClass::find($id);
        $students->update(['user_id'=>$request->user_id,
                           'class_id'=>$request->class_id]);
        return $students;  
    }
    public function store(Request $request){
        StudentToClass::create(['user_id'=>$request->user_id,
                                'class_id'=>$request->class_id]); 
        return $request->all();
    }
}
