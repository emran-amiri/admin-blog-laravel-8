<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware(['auth']);
    }
    
    public function index() 
    {
        $posts = Post::paginate(5);

        return view('posts.blogpost', ['posts' => $posts]);
    
    }
}
