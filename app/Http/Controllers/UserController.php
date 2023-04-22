<?php

namespace App\Http\Controllers;
use App\Models\ClassRoom;
use App\Models\User;
use App\Models\Lesson;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        $user=User::all();
        return $user;
    }
    public function user_class($id,$year){
        $user=User::find($id);
        return $user->classes->where('year',$year);
    }
    public function students(){
        $user=User::role(1)->get();
        return $user;
    }
    public function teachers(){
        $user=User::role(2)->get();
        return $user;
    }
    public function personels(){
        $user=User::role(3)->get();
        return $user;
    }
    public function user_lesson2($id , $grade_id){
        $user=User::find($id);
        return $user->lessons->where('grade_id', $grade_id);
    }
    public function user_lessons($id , $grade_id){
        $class_id=User::find($id)->classes->first()->pivot->class_id;
        // $class_id=User::find($id)->classes->first()->pivot->class_id;
        $lessons = ClassRoom::find($class_id)->lessons->where('grade_id',$grade_id);
        return $lessons;
    }
    public function men(){
        $user=User::gender(1)->get();
        return $user;
    }
    public function women(){
        $user=User::gender(2)->get();
        return $user;
    }
    public function user($id){
        $user = User::find($id);
        return $user;
    }
    public function remove($id){
        $result = User::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $user = User::find($id);
        $user->update(['f_name' => $request->f_name,
                       'l_name' => $request->l_name,
                       'father_name' => $request->father_name,
                       'national_code' => $request->national_code,
                       'gender' => $request->gender,
                       'role' => $request->role,
                       'email ' => $request->email,
                       'password' => $request->password]);
        return $user;  
    }
    public function store(Request $request){
        User::create(['f_name' => $request->f_name,
                      'l_name' => $request->l_name,
                      'father_name' => $request->father_name,
                      'national_code' => $request->national_code,
                      'gender' => $request->gender,
                      'role' => $request->role,
                      'email' => $request->email,
                      'password' => $request->password]); 
        return $request->all();
    }

    public function add_user_class(Request $request){
        $class = ClassRoom::find($request->class_id);
        $user = User::find($request->user_id);
        $result = $user->classes()->attach($class);
        return $result;
    }

    public function remove_user_class(Request $request){
        $class = ClassRoom::find($request->class_id);
        $user = User::find($request->user_id);
        $result = $user->classes()->detach($class);
        return $result;
    }

    public function add_user_lesson(Request $request){
        $lesson = Lesson::find($request->lesson_id);
        $user = User::find($request->user_id);
        $result = $user->lessons()->attach($lesson);
        return $result;
    }

    public function remove_user_lesson(Request $request){
        $lesson = Lesson::find($request->lesson_id);
        $user = User::find($request->user_id);
        $result = $user->lessons()->detach($lesson);
        return $result;
    }

   

}
