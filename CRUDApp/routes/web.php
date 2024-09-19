<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/search', [StudentController::class, 'searchForm'])->name('student.searchForm');
Route::get('/student/search', [StudentController::class, 'search'])->name('student.search');


