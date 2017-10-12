<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Version1\Entities\Blog;
use Modules\Version1\Entities\BlogCategory;

class BlogController extends Controller
{

    public function index()
    {
        $hotnews = Blog::orderBy('created_at', 'desc')->where('status', 1)->first(); 
        $blogs = Blog::orderBy('created_at', 'desc')->where('status', 1)->whereNotIn('post_id', [$hotnews->post_id])->paginate(12);
        return view('version1::pages.blog', compact('hotnews', 'blogs'));
    }

    public function post($slug) {
        $blog = Blog::where('slug', $slug)->first();
        return view('version1::pages.post', compact('blog'));
    }

    public function cate($slug) {
        $category = BlogCategory::where('slug', $slug)->first();
        $blogs = Blog::orderBy('created_at', 'desc')->where('cate_id', $category->cate_id)->paginate(12);
        return view('version1::pages.cateblog', compact('blogs', 'category') );
    }

}
