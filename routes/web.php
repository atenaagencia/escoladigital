<?php

use Illuminate\Support\Facades\Route;

//content routes

Route::get('/pdf', 'HomeController@pdf');

//general routes

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



// Admin

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/course', function() {
    return view('admin.course.index');
});

Route::get('/admin/course/new', function() {
    return view('admin.course.create');
});

Route::get('/admin/course/show', function() {
    return view('admin.course.show');
});

Route::get('/admin/course/edit', function() {
    return view('admin.course.edit');
});

//Admin content course (adiciona conteúdo a um curso)

Route::get('/admin/course/content', function() {
    return view('admin.course.content.cont_course_index');
});

Route::get('/admin/course/content/new', function() {
    return view('admin.course.content.cont_course_create');
});

Route::get('/admin/course/content/show', function() {
    return view('admin.course.content.cont_course_show');
});

Route::get('/admin/course/content/edit', function() {
    return view('admin.course.content.cont_course_edit');
});


//admin assistance

Route::get('/admin/assistance/', function() {
    return view('admin.assistance.index');
});

Route::get('/admin/assistance/new', function() {
    return view('admin.assistance.create');
});

Route::get('/admin/assistance/edit', function() {
    return view('admin.assistance.edit');
});

Route::get('/admin/assistance/show', function() {
    return view('admin.assistance.show');
});

//admin notes : mural

Route::get('/admin/note/', function() {
    return view('admin.note.index');
});

Route::get('/admin/note/new', function() {
    return view('admin.note.create');
});

Route::get('/admin/note/edit', function() {
    return view('admin.note.edit');
});

Route::get('/admin/note/show', function() {
    return view('admin.note.show');
});






// Student

Route::get('/teste', function () {
    return view('student.course.index');
})->middleware('auth');

Route::get('/assistance', function () {
    return view('student.assistance.index');
})->middleware('auth');

Route::get('/conquistas', function () {
    return view('student.conquistas');
})->middleware('auth');

Route::get('/plans', function () {
    return view('student.plans.index');
})->middleware('auth');

// Route::resource('course', 'CourseController')->middleware('auth');






//Courses and Lists

Route::get('/courses', function () {
    return view('courses.catalogo');
})->middleware('auth');

Route::get('/courses/design', function () {
    return view('courses.design.index');
})->middleware('auth');

Route::get('/courses/design/interface', function () {
    return view('courses.design.des_interface.index');
})->middleware('auth');