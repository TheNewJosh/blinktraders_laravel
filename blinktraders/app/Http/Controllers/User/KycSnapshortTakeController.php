<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class KycSnapshortTakeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        return view('user.kycSnapshortTake');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'webcam' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            // return response(['status' => false, 'message' => $validator]);
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            if($request->file('webcam')){
                $snapshotPath = public_path('img/user/');
                if(auth()->user()->snapshot){
                    unlink($snapshotPath . auth()->user()->snapshot);
                }
                $snapshotExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $snapshotName = "snp-" . sha1(time()) . $snapshotExtension;
                $snapshotNamePath = $snapshotPath . $snapshotName;
                $snapshotImg = Image::make($request->file('webcam'))->resize(100,100)->save($snapshotNamePath);
                $snapshotImg->save();

                User::where('id', auth()->user()->id)->update([
                    'snapshot' => $snapshotName,
                ]);

            }
            // return response(['status' => true, 'message' => 'Success']);
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
