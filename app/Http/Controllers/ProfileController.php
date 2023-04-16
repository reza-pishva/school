<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Profile;

class ProfileController extends Controller
{
    public function profiles(){
        $profiles = Profile::all();
        return $profiles;
    }
    public function profile($id){
        $profiles = Profile::find($id);
        return Profile::find($id);
    }
    public function remove($id){
        $result = Profile::find($id)->delete();     
    }
    public function update(Request $request , $id){
        $profiles = Profile::find($id);
        $profiles->update(['father_job'=>$request->father_job,
                           'mother_job'=>$request->mother_job,
                           'father_phone_number'=>$request->father_phone_number,
                           'mother_phone_number'=>$request->mother_phone_number,
                           'address'=>$request->address,
                           'consideration'=>$request->consideration,
                           'birthday'=>$request->birthday,
                           'major'=>$request->major,
                           'user_id '=>$request->user_id ]);
        return $students;  
    }
    public function store(Request $request){
        Profile::create(['father_job'=>$request->father_job,
                        'mother_job'=>$request->mother_job,
                        'father_phone_number'=>$request->father_phone_number,
                        'mother_phone_number'=>$request->mother_phone_number,
                        'address'=>$request->address,
                        'consideration'=>$request->consideration,
                        'birthday'=>$request->birthday,
                        'major'=>$request->major,
                        'user_id '=>$request->user_id ]); 
        return $request->all();
    }
}
