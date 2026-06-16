<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/student/create', function () {
    return view('backend.students.create');
});