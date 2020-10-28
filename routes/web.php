<?php

use Illuminate\Support\Facades\Route;

//content routes

Route::get('/pdf', 'HomeController@pdf');

//general routes

Route::get('/', function () {
    return view('site/index');
});

//site routes

Route::get('/category/code', function () {
    return view('site/code/index');
});

Route::get('/category/design', function () {
    return view('site/design/index');
});

Route::get('/category/design/interface', function () {
    return view('site/design/interface/index');
});

Route::get('/category/marketing', function () {
    return view('site/marketing/index');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// Admin

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

// Admin course

Route::get('/admin/course', function () {
    return view('admin.course.index');
});

Route::get('/admin/course/new', function () {
    return view('admin.course.create');
});

Route::get('/admin/course/show', function () {
    return view('admin.course.show');
});

Route::get('/admin/course/edit', function () {
    return view('admin.course.edit');
});

//Admin content course (adiciona conteúdo a um curso)

Route::get('/admin/course/content', function () {
    return view('admin.course.content.cont_course_index');
});

Route::get('/admin/course/content/new', function () {
    return view('admin.course.content.cont_course_create');
});

Route::get('/admin/course/content/show', function () {
    return view('admin.course.content.cont_course_show');
});

Route::get('/admin/course/content/edit', function () {
    return view('admin.course.content.cont_course_edit');
});

//admin student ------------------------------------------

Route::get('/admin/student/', function () {
    return view('admin.student.index');
});

Route::get('/admin/student/edit', function () {
    return view('admin.student.edit');
});

Route::get('/admin/student/show', function () {
    return view('admin.student.show');
});

//admin student content

Route::get('/admin/student/content/new', function () {
    return view('admin.student.content.cont_stud_create');
});

Route::get('/admin/student/content/show', function () {
    return view('admin.student.content.cont_stud_show');
});

Route::get('/admin/student/content/edit', function () {
    return view('admin.student.content.cont_stud_edit');
});

// -----------------------------------------------------//

//admin plan

Route::get('/admin/plan/', function () {
    return view('admin.plan.index');
});

Route::get('/admin/plan/new', function () {
    return view('admin.plan.create');
});

Route::get('/admin/plan/edit', function () {
    return view('admin.plan.edit');
});

Route::get('/admin/plan/show', function () {
    return view('admin.plan.show');
});

//admin assistance

Route::get('/admin/assistance/', function () {
    return view('admin.assistance.index');
});

Route::get('/admin/assistance/new', function () {
    return view('admin.assistance.create');
});

Route::get('/admin/assistance/edit', function () {
    return view('admin.assistance.edit');
});

Route::get('/admin/assistance/show', function () {
    return view('admin.assistance.show');
});

//admin notes : mural

Route::get('/admin/note/', function () {
    return view('admin.note.index');
});

Route::get('/admin/note/new', function () {
    return view('admin.note.create');
});

Route::get('/admin/note/edit', function () {
    return view('admin.note.edit');
});

Route::get('/admin/note/show', function () {
    return view('admin.note.show');
});

// -----------------------------------------------------//

//admin achievements

Route::get('/admin/achievement/', function () {
    return view('admin.achievement.index');
});

Route::get('/admin/achievement/new', function () {
    return view('admin.achievement.create');
});

Route::get('/admin/achievement/edit', function () {
    return view('admin.achievement.edit');
});

Route::get('/admin/achievement/show', function () {
    return view('admin.achievement.show');
});

// Student

Route::get('/student/perfil', function () {
    return view('student.perfil.index');
})->middleware('auth');

Route::get('/student/course', function () {
    return view('student.course.index');
})->middleware('auth');

Route::get('/assistance', function () {
    return view('student.assistance.index');
})->middleware('auth');

Route::get('/certificate', function () {
    return view('certificate.index');
})->middleware('auth');

Route::get('/certificate/show', function () {
    return view('certificate.show');
})->middleware('auth');

Route::get('/certificate/edit', function () {
    return view('certificate.edit');
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
