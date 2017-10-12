<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Blog\Entities\Post;

class ListsController extends Controller
{
    /**
     * Display a listing of the blog.
     * @return Response
     */
    public function index()
    {
    	$posts = Post::orderBy('post_id', 'desc')->get();
        return view('blog::lists', compact('posts'));
    }

    
}
