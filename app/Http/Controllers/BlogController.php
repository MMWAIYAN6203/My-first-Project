<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(8);
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog_detail', compact('blog'));
    }
}
