<?php

namespace App\Http\Controllers;

#Models
use App\Models\Post;

use Illuminate\Http\Request;

use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View{
        $posts  =   Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
