<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Carbon;
use App\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $limit = 6;

    public function index()
    {
        $posts = Post::with('author')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        return view("blog.index", compact('posts'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;

        // \DB::enableQueryLog();
        $posts = $category->posts()
            ->with('author')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        return view("blog.index", compact('posts', 'categoryName'));

        //  dd(\DB::getQueryLog());
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        // \DB::enableQueryLog();
        $posts = $author->posts()
            ->with('category')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        return view("blog.index", compact('posts', 'authorName'));
    }

    public function show(Post $post)
    {
        $post->increment('view_count');
        return view("blog.show", compact('post'));
    }
}
