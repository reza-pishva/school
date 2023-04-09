<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\ClassRoom;

class GradeController extends Controller
{
    public function grades(){
        dd(ClassRoom::find(2));
    }
}
