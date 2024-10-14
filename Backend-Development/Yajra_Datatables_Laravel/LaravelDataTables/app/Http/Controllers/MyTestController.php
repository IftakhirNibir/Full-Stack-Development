<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyTestController extends Controller
{
    //

    public function dataTableLogic(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select('*');
            return datatables()->of($users)
                ->make(true);
        }

        return view('welcome');
    }
}


