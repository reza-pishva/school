<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassRoomController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/school/grade/grades',[GradeController::class,'grades']);
Route::get('/school/grade/{id}',[GradeController::class,'grade']);
Route::get('/school/grade/remove/{id}',[GradeController::class,'remove']);
Route::put('/school/grade/update/{id}',[GradeController::class,'update']);
Route::post('/school/grade/store',[GradeController::class,'store']);

Route::get('/school/exam/exam-types',[ExamTypeController::class,'examTypes']);
Route::get('/school/exam/exam-type/{id}',[ExamTypeController::class,'examType']);
Route::get('/school/exam/exam-type/remove/{id}',[ExamTypeController::class,'remove']);
Route::put('/school/exam/exam-type/update/{id}',[ExamTypeController::class,'update']);
Route::post('/school/exam/exam-type/store',[ExamTypeController::class,'store']);

Route::get('/school/user/users',[UserController::class,'users']);
Route::get('/school/user/{id}',[UserController::class,'user']);
Route::get('/school/user/remove/{id}',[UserController::class,'remove']);
Route::put('/school/user/update/{id}',[UserController::class,'update']);
Route::post('/school/user/store',[UserController::class,'store']);

Route::get('/school/lesson/lessons',[LessonController::class,'lessons']);
Route::get('/school/lesson/{id}',[LessonController::class,'lesson']);
Route::get('/school/lesson/remove/{id}',[LessonController::class,'remove']);
Route::put('/school/lesson/update/{id}',[LessonController::class,'update']);
Route::post('/school/lesson/store',[LessonController::class,'store']);

Route::get('/school/student/students',[StudentController::class,'students']);
Route::get('/school/student/{id}',[StudentController::class,'student']);
Route::get('/school/student/remove/{id}',[StudentController::class,'remove']);
Route::put('/school/student/update/{id}',[StudentController::class,'update']);
Route::post('/school/student/store',[StudentController::class,'store']);

Route::get('/school/teacher/teachers',[TeacherController::class,'teachers']);
Route::get('/school/teacher/{id}',[TeacherController::class,'teacher']);
Route::get('/school/teacher/remove/{id}',[TeacherController::class,'remove']);
Route::put('/school/teacher/update/{id}',[TeacherController::class,'update']);
Route::post('/school/teacher/store',[TeacherController::class,'store']);

Route::get('/school/classroom/classrooms',[ClassRoomController::class,'classrooms']);
Route::get('/school/classroom/{id}',[ClassRoomController::class,'classroom']);
Route::get('/school/classroom/remove/{id}',[ClassRoomController::class,'remove']);
Route::put('/school/classroom/update/{id}',[TeacherController::class,'update']);
Route::post('/school/classroom/store',[ClassRoomController::class,'store']);
