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

Route::prefix('students')->group(function () {
    Route::view('/', 'students.index');
    Route::view('/documents', 'students.documents');
    Route::view('/info', 'students.info');
    Route::view('/{id}/attestation-sheet', 'students.attestation-sheet')
        ->where('id', '[0-9]+');
});

Route::view('/employees', 'employees');
Route::view('/events', 'events');
Route::view('/', 'index');