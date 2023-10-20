<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SecretaryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('user', [ProfileController::class, 'index']);
Route::get('user/new', [SecretaryController::class, 'create']);
Route::post('user/new', [SecretaryController::class, 'store']);
Route::get('index', [StudentController::class, 'index'])->name('student.index');

Route::get('schedule', [StudentController::class, 'schedule'])->name('student.schedule');
Route::get('student/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('student', [StudentController::class, 'create'])->name('student.create');
Route::post('student', [StudentController::class, 'store'])->name('student.store');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/edit/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('teacher', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/edit/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::delete('teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

Route::get('grades/{subject}/{stage}/{parallel}', [GradeController::class, 'show'])->name('grade.show');
Route::get('grade/{student}/{subject}/{teacher}', [GradeController::class, 'edit']);
Route::put('grade/edit/{id}', [GradeController::class, 'update'])->name('grade.update');
Route::get('grade/pdf/{subject}/{stage}/{parallel}',[GradeController::class,'pdf']);

Route::get('secretary/teachers',[SecretaryController::class,'teachers'])->name('secretary.teachers');
Route::get('secretary/students',[SecretaryController::class,'students'])->name('secretary.students');