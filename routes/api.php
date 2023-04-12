<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;

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
