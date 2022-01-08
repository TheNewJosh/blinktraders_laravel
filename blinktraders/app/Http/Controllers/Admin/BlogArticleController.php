<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $blog = Blog::get();

        return view('admin.blogArticle', [
            'blog' => $blog,
        ]);
    }

    public function store(Request $request)
    {
        Blog::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('statusSuccess', 'Success');
    }

    public function destroy(Request $request) 
    {

        $blog = Blog::find($request->id);
    
        $blog->delete();
    
        return redirect()->back()->with('statusSuccessDelete', 'Success');
    
    }
}
