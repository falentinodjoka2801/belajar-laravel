<?php

namespace App\Http\Controllers;

#Models
use App\Models\Post;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View{
        $posts  =   Post::latest()->paginate(5);
        var_dump($posts); exit;
        return view('posts.index', compact('posts'));
    }
    public function create(): View{
        return view('posts.create');
    }
    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'image'     =>  'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     =>  'required|min:5',
            'content'   =>  'required|min:10'
        ]);

        $image  =   $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            'image'     =>  $image->hashName(),
            'title'     =>  $request->title,
            'content'   =>  $request->content
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data berhasil disimpan!']);
    }
}
