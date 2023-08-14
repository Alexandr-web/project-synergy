<?php

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

Route::prefix('auth')->group(function () {
    Route::view('/login', 'auth.login');
});

Route::prefix('boss')->group(function () {
    Route::view('/', 'boss.index');
});

Route::prefix('employee')->group(function () {
    Route::view('/documents', 'employee.documents');
    Route::view('/events', 'employee.events');
    Route::view('/students-info', 'employee.studentsInfo');
    Route::view('/students', 'employee.students');
});

Route::prefix('student')->group(function () {
    Route::view('/', 'student.index');
});