<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'home'])->name('about');
Route::get('/add-student',[StudentController::class,'addStudent'])->name('add-student');
Route::post('/save-student',[StudentController::class,'saveStudent'])->name('save-student');
Route::get('/manage-student',[StudentController::class,'manageStudent'])->name('manage-student');
Route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('edit-student');
Route::post('/update-student/{id}',[StudentController::class,'updateStudent'])->name('update-student');
Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('delete-student');
