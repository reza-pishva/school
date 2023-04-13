<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;

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
