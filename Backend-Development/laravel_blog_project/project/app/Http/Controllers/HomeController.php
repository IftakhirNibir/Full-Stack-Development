<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){

        // $allcategories = DB::table("categories")->get();
        $allcategories = Category::all();
        $posts = Post::latest()->get();
        $posts = Post::orderBy('id','desc')->get();
        return view('home', compact('allcategories', 'posts'));
    }
}



