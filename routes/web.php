<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;

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
    Route::view('/', 'auth.main')
        ->middleware('abort_if_token_exist');

    Route::get('/login', [AuthController::class, 'renderLoginPage'])
        ->middleware('abort_if_token_exist');

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::prefix('directorate')->group(function () {
    Route::view('/', 'directorate')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:directorate supervisor');
});

Route::prefix('supervisor')->group(function () {
    Route::view('/{id}/employees', 'supervisor.employees')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:supervisor')
        ->where('id', '[0-9]+');

    Route::view('/{id}/characteristic', 'supervisor.characteristic')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:supervisor')
        ->where('id', '[0-9]+');
});

Route::prefix('students')->group(function () {
    Route::view('/{id}', 'students.index')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:directorate')
        ->where('id', '[0-9]+');

    Route::view('/{id}/attestation-sheet', 'students.attestation-sheet')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:student supervisor')
        ->where('id', '[0-9]+');
    
    Route::post('/authorization', [StudentController::class, 'authorization']);
});

Route::prefix('employees')->group(function () {
    Route::get('/{id}', [EmployeeController::class, 'renderPage'])
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:supervisor')
        ->where('id', '[0-9]+');
});