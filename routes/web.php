<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    Route::view('/login', 'auth.login')
        ->middleware('redirect_if_token_exist');

    Route::post('/login', [AuthController::class, 'login']);
});

Route::prefix('students')->group(function () {
    Route::view('/', 'students.index')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:employee');

    Route::view('/documents', 'students.documents')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:employee');

    Route::view('/info', 'students.info')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:employee');

    Route::view('/{id}/attestation-sheet', 'students.attestation-sheet')
        ->where('id', '[0-9]+')
        ->middleware('redirect_if_token_not_exist')
        ->middleware('role_must_be:student');
});

Route::view('/employees', 'employees')
    ->middleware('redirect_if_token_not_exist')
    ->middleware('role_must_be:boss');

Route::view('/events', 'events')
    ->middleware('redirect_if_token_not_exist')
    ->middleware('role_must_be:employee');

Route::view('/', 'index')
    ->middleware('redirect_if_token_not_exist');