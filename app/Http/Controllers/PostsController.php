<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['view', 'show']);
    }

    public function home()
    {
        $title = "Home";
        
        return view ('welcome', compact('title'));
    
    }

    public function view() 
    {

        $posts = Post::latest()->get();

        $title = "Views";
    
        return view('posts.index', compact('posts', 'title'));
    }
    

    public function show(Post $post)
    {
        
        $title = "show views";

        return view('posts.show', compact('post', 'title'));
    }

    public function create()
    {
        $title = "Posts";

        return view('posts.create', compact('title'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:10',
            'body' => 'required'
        ]);


         auth()->user()->publish(
            
            new Post(request(['title', 'body', 'user_id']))
        ); 
/* 
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]); */


        return redirect('/views');

    }
}
