<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            'Username' => 'ifty123',
            'appName' => config('app.name'),
        ]);
    }
}
