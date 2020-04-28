<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /*public function index()
    {
        $posts = Post::all();
        return view("blog.index",compact('posts'));
    }*/

   /* public function index()
    {
        $posts = Post::with('author')->latestFirst()->simplePaginate($this->limit);
        return view("blog.index", compact('posts'));
    }*/

    protected $limit = 6;

    public function index()
    {
        $posts = Post::with('author')->latestFirst()->simplePaginate($this->limit);
        return view("blog.index", compact('posts'));
    }
}
