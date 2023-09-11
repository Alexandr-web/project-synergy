<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function renderPage(Request $req, int $id) {
        $tabs = ['info', 'attestation', 'documents', 'mode-services', 'education'];

        if (!array_key_exists('tab', $_GET)) {
            $url = url()->current();

            return redirect("$url/?tab=info");
        }

        if (!in_array($_GET['tab'], $tabs)) {
            return abort(404);
        }

        return view('employee', ['active_route' => $_GET['tab']]);
    }
}
