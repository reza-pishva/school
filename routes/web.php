<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/school/grade/grades',[GradeController::class,'grades']);
Route::get('/school/grade/{id}',[GradeController::class,'grade']);
Route::get('/school/grade/remove/{id}',[GradeController::class,'remove']);
Route::put('/school/grade/update/{id}',[GradeController::class,'update']);
Route::post('/school/grade/store',[GradeController::class,'store']);

