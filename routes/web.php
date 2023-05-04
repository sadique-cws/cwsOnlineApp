<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;


// HomeController
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
});

// admin controller
Route::prefix("teacher")->group(function(){
    Route::controller(TeacherController::class)->group(function(){
        // without using Middleware 
        Route::match(["post", "get"], '/login', 'teacherlogin')->name('Teacher.login');
        
        Route::middleware("auth:teacher")->group(function(){
            Route::get('/', 'index')->name('teacher.panel');
            Route::get('/logout','teacherlogout')->name('teacher.logout');


        });
    });
});