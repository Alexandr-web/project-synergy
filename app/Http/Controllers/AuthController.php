<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AuthToken;

class AuthController extends Controller
{
    public function renderLoginPage(Request $req) {
        $roles = ['student', 'directorate', 'supervisor'];

        if (!array_key_exists("role", $_GET) || !in_array($_GET['role'], $roles)) {
            return abort(404);
        }

        return view("auth.login", ['role' => $_GET['role']]);
    }
}
