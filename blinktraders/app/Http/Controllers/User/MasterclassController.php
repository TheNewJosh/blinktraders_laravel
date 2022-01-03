<?php

namespace App\Http\Controllers\User;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MasterclassController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('user.masterclass');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            MasterClass::create([
                'user_id' => $request->user_id,
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
