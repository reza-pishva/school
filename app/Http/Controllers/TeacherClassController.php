<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherToClass;

class TeacherClassController extends Controller
{
    public function teacher_classes(){
        $teacher = TeacherToClass::all();
        return TeacherToClass::all();
    }
    public function teacher_class($id){
        $teacher = TeacherToClass::find($id);
        return TeacherToClass::find($id);
    }
    public function remove($id){
        $result = TeacherToClass::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $teacher = TeacherToClass::find($id);
        $teacher->update(['exam_type'=>$request->exam_type]);
        return $teacher;  
    }
    public function store(Request $request){
        TeacherToClass::create(['exam_type' => $request->exam_type]); 
        return $request->all();
    }
}
