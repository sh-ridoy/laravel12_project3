<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/students', function () {
    return view('backend.students.index');
});

