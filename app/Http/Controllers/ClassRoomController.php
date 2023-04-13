<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function classrooms(){
        $classroom = ClassRoom::all();
        return $classroom;
    }
    public function classroom($id){
        $classroom = ClassRoom::find($id);
        return $classroom;
    }
    public function remove($id){
        $result = ClassRoom::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $classroom = ClassRoom::find($id);
        $classroom->update(['year' => $request->year,
                          'name' => $request->name, 
                          'grade_id' => $request->grade_id]);
        return $classroom;  
    }
    public function store(Request $request){
        ClassRoom::create(['year' => $request->year,
                         'name' => $request->name, 
                         'grade_id' => $request->grade_id]); 
        return $request->all();
    }
}
