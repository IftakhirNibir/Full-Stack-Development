<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // Raw SQL query to fetch all data from the tasks table
        $tasks = DB::select('SELECT * FROM tasks');
        // Pass the data to the view
        return view('welcome', ['tasks' => $tasks]);
    }
}



