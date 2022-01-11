<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class BlogPostNewUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index(Blog $blog_id)
    {
        $blogCategory = BlogCategory::get();

        return view('admin.blogPostNewUpdate', [
            'blog_id' => $blog_id,
            'blogCategory' => $blogCategory,
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'short_detail' => 'required',
            'thumbnail' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            if($request->file('thumbnail')){
                $thumbnailPath = public_path('img/blog/');
                unlink($thumbnailPath . $request->img_hd);
                $thumbnailExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $thumbnailName = "blog-" . sha1(time()) . $thumbnailExtension;
                $thumbnailNamePath = $thumbnailPath . $thumbnailName;
                $thumbnailImg = Image::make($request->file('thumbnail'))->resize(420,357)->save($thumbnailNamePath);
                $thumbnailImg->save();

                Blog::where('id', $request->id)->update([
                    'thumbnail' => $thumbnailName,
                ]);

            }

            Blog::where('id', $request->id)->update([
                'title' => $request->title,
                'blog_category_id' => $request->category_id,
                'content' => $request->content,
                'short_detail' => $request->short_detail,
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
