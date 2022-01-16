<?php

namespace App\Http\Controllers\Common;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{    
    public function index($category_id)
    {
        $blog = Blog::where('blog_category_id', $category_id)->where('status', 1)->get();

        return view('common.blog', [
            'blog' => $blog,
        ]);
    }
    
    public function read(Blog $article_id)
    {
        $blogCategory = BlogCategory::get();
        
        return view('common.blogRead', [
            'blog' => $article_id,
            'blogCategory' => $blogCategory,
        ]);
    }
}
