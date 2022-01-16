<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class BlogPostNewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $blogCategory = BlogCategory::get();

        return view('admin.blogPostNew', [
            'blogCategory' => $blogCategory,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'short_detail' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            if($request->file('thumbnail')){
                $thumbnailPath = public_path('img/blog/');
                $thumbnailExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $thumbnailName = "blog-" . sha1(time()) . $thumbnailExtension;
                $thumbnailNamePath = $thumbnailPath . $thumbnailName;
                $thumbnailImg = Image::make($request->file('thumbnail'))->resize(420,357)->save($thumbnailNamePath);
                $thumbnailImg->save();
            }else{
                $thumbnailName = "";
            }
            
            Blog::create([
                'title' => $request->title,
                'blog_category_id' => $request->category_id,
                'content' => $request->content,
                'short_detail' => $request->short_detail,
                'thumbnail' => $thumbnailName,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
