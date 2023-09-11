<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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
        ->middleware('redirect_if_token_exist');

    Route::get('/login', [AuthController::class, 'renderLoginPage'])
        ->middleware('redirect_if_token_exist');
});

Route::prefix('directorate')->group(function () {
    Route::view('/', 'directorate');
});

Route::prefix('supervisor')->group(function () {
    Route::view('/employees', 'supervisor.employees');
    Route::view('/characteristic', 'supervisor.characteristic');
});

Route::prefix('students')->group(function () {
    Route::view('/{id}', 'students.index')
        ->where('id', '[0-9]+');

    Route::view('/{id}/attestation-sheet', 'students.attestation-sheet')
        ->where('id', '[0-9]+');
});

Route::prefix('employees')->group(function () {
    Route::get('/{id}', [EmployeeController::class, 'renderPage'])
        ->where('id', '[0-9]+');
});