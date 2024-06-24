<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact_form', function () {
    return view('contact_form');
});


Route::get('/student',[StudentController::class,'index']);

Route::get('/student/create',[StudentController::class,'create']);
