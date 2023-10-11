<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employee/{id}',[EmployeeController::class,'show']);
Route::post('/employee',[EmployeeController::class,'store']);
Route::post('/employee/{id}',[EmployeeController::class,'update']);
Route::post('/employee_delete/{id}',[EmployeeController::class,'destroy']);
