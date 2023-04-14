<?php

namespace App\Http\Controllers;
use App\Models\ClassProgram;
use Illuminate\Http\Request;

class ClassProgramController extends Controller
{
    public function programs(){
        $program = ClassProgram::all();
        return $program;
    }
    public function program($id){
        $program = ClassProgram::find($id);
        return $program;
    }
    public function remove($id){
        $result = ClassProgram::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $program = ClassProgram::find($id);
        $program->update(['lesson_id' => $request->lesson_id,
                          'class_id' => $request->class_id,
                          'year' => $request->year,
                          'time_start' => $request->time_start,
                          'time_end' => $request->time_end, 
                          'day_of_week' => $request->day_of_week]);
        return $program;  
    }
    public function store(Request $request){
        ClassProgram::create(['lesson_id' => $request->lesson_id,
                              'class_id' => $request->class_id,
                              'year' => $request->year,
                              'time_start' => $request->time_start,
                              'time_end' => $request->time_end, 
                              'day_of_week' => $request->day_of_week]); 
        return $request->all();
    }
}
