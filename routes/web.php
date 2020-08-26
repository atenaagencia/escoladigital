<?php

use Illuminate\Support\Facades\Route;


//general routes

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Courses and Lists

Route::get('/catalogo', function () {
    return view('catalogo');
})->middleware('auth');

Route::get('/courses/design', function () {
    return view('courses.design.index');
})->middleware('auth');

Route::get('/courses/design/interface', function () {
    return view('courses.design.des_interface.index');
})->middleware('auth');


// Student

Route::get('/teste', function () {
    return view('student.course.index');
})->middleware('auth');

Route::get('/conquistas', function () {
    return view('student.conquistas');
})->middleware('auth');

// Route::resource('course', 'CourseController')->middleware('auth');