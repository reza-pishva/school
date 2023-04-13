<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function teachers(){
        $teacher = Teacher::all();
        return $teacher;
    }
    public function teacher($id){
        $teacher = Teacher::find($id);
        return $teacher;
    }
    public function remove($id){
        $result = Teacher::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $teacher = Teacher::find($id);
        $teacher->update(['major' => $request->major,
                          'address' => $request->address,
                          'consideration' => $request->consideration,
                          'birthday' => $request->birthday,
                          'user_id' => $request->user_id]);
        return $teacher;  
    }
    public function store(Request $request){
        Teacher::create(['major' => $request->major,
                         'address' => $request->address,
                         'consideration' => $request->consideration,
                         'birthday' => $request->birthday,
                         'user_id' => $request->user_id]); 
        return $request->all();
    }
}
