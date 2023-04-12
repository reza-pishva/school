<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamTypeController;

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
