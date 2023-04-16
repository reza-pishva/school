<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        // $user=User::all();
        // return $user;


        $students=User::role(1);
        $user=$students->find(1)->student->father_job;
        return $user;

        $teachers = User::role(2);
        $user=$teachers->find(1)->teacher->consideration;
        return $user;
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
}
