<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\BackEnd\CoursesController;
use App\Http\Controllers\BackEnd\ArchiveController;
use App\Http\Controllers\BackEnd\TeachersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Auth::routes();
        Route::get('/', function () {
            return view('promo');
        })->middleware('guest');
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/re_view_home', [HomeController::class, 'reViewhome']);

        // CoursesController
        Route::get('/all_courses', [CoursesController::class, 'index']);
        Route::post('/save-form', [CoursesController::class, 'store'])->name('store.course');
        Route::get('/edit/course/{id}', [CoursesController::class, 'edit']);
        Route::post('/update-course', [CoursesController::class, 'update'])->name('update.course');
        Route::post('/delete-course', [CoursesController::class, 'delete'])->name('delete.course');
        Route::post('/archive-course', [CoursesController::class, 'archive'])->name('archive.course');

        // ArchiveController
        Route::get('/archive-courses', [ArchiveController::class, 'index']);
        Route::post('/delete-course-archive', [ArchiveController::class, 'delete'])->name('delete.course.archive');
        Route::post('/restore-course', [ArchiveController::class, 'restore'])->name('restore.course');


        // livewire form list lessson and add and update and delete
        Route::prefix('lessons')->group(function () {
            Route::view('add-lesson', 'back_end.list_videos.add_lesson')->middleware('auth');
            Route::view('list-lessons', 'back_end.list_videos.list-lessons')->middleware('auth');
        });


        // TeachersController
        Route::middleware('auth')->group(function () {
        Route::get('/teachers', [TeachersController::class, 'index']);
        Route::get('teachers/add-new-teacher', [TeachersController::class, 'create']);
        Route::post('/store.teacher', [TeachersController::class, 'store'])->name('store.teacher');
        Route::get('teachers/{id}/edit-teacher', [TeachersController::class, 'edit']);
        Route::post('/update/teacher', [TeachersController::class, 'update'])->name('update.teacher');
        Route::get('/delete/{id}', [TeachersController::class, 'delete']);




          });

    });
