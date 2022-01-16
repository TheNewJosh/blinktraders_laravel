<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $blogCategory = BlogCategory::get();

        return view('admin.blogCategory', [
            'blogCategory' => $blogCategory,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            
            BlogCategory::create([
                'name' => $request->name,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
