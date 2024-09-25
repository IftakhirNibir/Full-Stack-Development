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
        $categories = Category::all();
        // $posts = Post::latest()->get();
        $posts = Post::when(request('cate_id'), function($query){
            $query->where('category_id', request('cate_id'));
        })->latest()->get();

        return view('home', compact('categories', 'posts'));
    }
}



