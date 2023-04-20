<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\ExamNameController;
use App\Http\Controllers\TeacherLessonController;
use App\Http\Controllers\TeacherClassController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\ClassProgramController;
use App\Http\Controllers\ExamStudentController;

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
Route::get('/school/user/students',[UserController::class,'students']);
Route::get('/school/user/teachers',[UserController::class,'teachers']);
Route::get('/school/user/personels',[UserController::class,'personels']);
Route::get('/school/user/user-class/{id}/{year}',[UserController::class,'user_class']);
Route::get('/school/user/men',[UserController::class,'men']);
Route::get('/school/user/women',[UserController::class,'women']);
Route::get('/school/user/{id}',[UserController::class,'user']);
Route::get('/school/user/remove/{id}',[UserController::class,'remove']);
Route::put('/school/user/update/{id}',[UserController::class,'update']);
Route::post('/school/user/store',[UserController::class,'store']);

Route::get('/school/lesson/lessons',[LessonController::class,'lessons']);
Route::get('/school/lesson/{id}',[LessonController::class,'lesson']);
Route::get('/school/lesson/remove/{id}',[LessonController::class,'remove']);
Route::put('/school/lesson/update/{id}',[LessonController::class,'update']);
Route::post('/school/lesson/store',[LessonController::class,'store']);

Route::get('/school/profile/profiles',[ProfileController::class,'profiles']);
Route::get('/school/profile/{id}',[ProfileController::class,'profile']);
Route::get('/school/profile/remove/{id}',[ProfileController::class,'remove']);
Route::put('/school/profile/update/{id}',[ProfileController::class,'update']);
Route::post('/school/profile/store',[ProfileController::class,'store']);

Route::get('/school/classroom/classrooms',[ClassRoomController::class,'classrooms']);
Route::get('/school/classroom/current-classrooms',[ClassRoomController::class,'currentClassRooms']);
Route::get('/school/classroom/{id}',[ClassRoomController::class,'classroom']);
Route::get('/school/classroom/class-teachers/{id}',[ClassRoomController::class,'class_teachers']);
Route::get('/school/classroom/class-students/{id}',[ClassRoomController::class,'class_students']);
Route::get('/school/classroom/remove/{id}',[ClassRoomController::class,'remove']);
Route::put('/school/classroom/update/{id}',[ClassRoomController::class,'update']);
Route::post('/school/classroom/store',[ClassRoomController::class,'store']);

Route::get('/school/exam/exam_names',[ExamNameController::class,'exams']);
Route::get('/school/exam/{id}',[ExamNameController::class,'exam']);
Route::get('/school/exam/remove/{id}',[ExamNameController::class,'remove']);
Route::put('/school/exam/update/{id}',[ExamNameController::class,'update']);
Route::post('/school/exam/store',[ExamNameController::class,'store']);

Route::get('/school/teacher-lesson/lessons',[TeacherLessonController::class,'lessons']);
Route::get('/school/teacher-lesson/current-lessons',[TeacherLessonController::class,'currentLessons']);
Route::get('/school/teacher-lesson/{id}',[TeacherLessonController::class,'lesson']);
Route::get('/school/teacher-lesson/remove/{id}',[TeacherLessonController::class,'remove']);
Route::put('/school/teacher-lesson/update/{id}',[TeacherLessonController::class,'update']);
Route::post('/school/teacher-lesson/store',[TeacherLessonController::class,'store']);

Route::get('/school/teacher-class/teacher-classes',[TeacherClassController::class,'teacher_classes']);
Route::get('/school/teacher-class/{id}',[TeacherClassController::class,'teacher_class']);
Route::get('/school/teacher-class/remove/{id}',[TeacherClassController::class,'remove']);
Route::put('/school/teacher-class/update/{id}',[TeacherClassController::class,'update']);
Route::post('/school/teacher-class/store',[TeacherClassController::class,'store']);

Route::get('/school/class-program/programs',[ClassProgramController::class,'programs']);
Route::get('/school/class-program/program/{id}',[ClassProgramController::class,'program']);
Route::get('/school/class-program/remove/{id}',[ClassProgramController::class,'remove']);
Route::put('/school/class-program/update/{id}',[ClassProgramController::class,'update']);
Route::post('/school/class-program/store',[ClassProgramController::class,'store']);

Route::get('/school/exam-student/exams',[ExamStudentController::class,'exams']);
Route::get('/school/exam-student/current-exams',[ExamStudentController::class,'currentExams']);
Route::get('/school/exam-student/exam/{id}',[ExamStudentController::class,'exam']);
Route::get('/school/exam-student/remove/{id}',[ExamStudentController::class,'remove']);
Route::put('/school/exam-student/update/{id}',[ExamStudentController::class,'update']);
Route::post('/school/exam-student/store',[ExamStudentController::class,'store']);
