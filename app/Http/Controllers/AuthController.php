<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AuthToken;

class AuthController extends Controller
{
    public function login(Request $req) {
        $req->validate(
            [
                'login' => 'required|min:6|max:16',
                'password' => 'required|min:8',
                'role' => 'required'
            ],
            [
                'login.required' => 'Логин обязателен для заполнения',
                'login.min' => 'Логин должен иметь минимальную длину в 6 символов',
                'login.max' => 'Логин может иметь максимум 16 символов',
                'password.required' => 'Пароль обязателен для заполнения',
                'password.min' => 'Пароль должен иметь минимальную длину в 8 символов',
                'role.required' => 'Роль обязательна для заполнения',
            ]
        );

        $role = $req->input('role');
        $login = $req->input('login');
        $user_data = [
            'role' => $role,
            'data_user' => [
                'login' => $login,
                'id' => 1,
            ],
        ];

        $token = AuthToken::create($user_data);

        return response(['message' => 'Вход успешно выполнен!', 'token' => $token, 'type' => 'success'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function renderLoginPage(Request $req) {
        $roles = ['student', 'directorate', 'supervisor'];

        if (!array_key_exists("role", $_GET) || !in_array($_GET['role'], $roles)) {
            return abort(404);
        }

        return view("auth.login", ['role' => $_GET['role']]);
    }
}
