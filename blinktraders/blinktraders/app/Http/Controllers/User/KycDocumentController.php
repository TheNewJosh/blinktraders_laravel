<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KycDocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        return view('user.kycDocument');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'doc_type_snap' => 'required',
        ]);

        if($validator->fails()) {
            // return response(['status' => false, 'message' => $validator]);
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
        
            $front_snapshot = $_FILES['front_snapshot']['name'];
            if($front_snapshot){
                $front_snapshotPath = public_path('img/user/');
                if(auth()->user()->front_snapshot){
                    unlink($front_snapshotPath . auth()->user()->front_snapshot);
                }
                $front_snapshotTemp = $_FILES['front_snapshot']['tmp_name'];
                $front_snapshotImg = explode(".", $front_snapshot);
                $front_snapshotName = "fsnp_".$front_snapshotImg[0]."".microtime(true).".".$front_snapshotImg[1];
                move_uploaded_file($front_snapshotTemp, $front_snapshotPath. $front_snapshotName);

                User::where('id', auth()->user()->id)->update([
                    'front_snapshot' => $front_snapshotName,
                ]);

            }

            $back_snapshot = $_FILES['back_snapshot']['name'];
            if($back_snapshot){
                $back_snapshotPath = public_path('img/user/');
                if(auth()->user()->back_snapshot){
                    unlink($back_snapshotPath . auth()->user()->back_snapshot);
                }
                $back_snapshotTemp = $_FILES['back_snapshot']['tmp_name'];
                $back_snapshotImg = explode(".", $back_snapshot);
                $back_snapshotName = "bsnp_".$back_snapshotImg[0]."".microtime(true).".".$back_snapshotImg[1];
                move_uploaded_file($back_snapshotTemp, $back_snapshotPath. $back_snapshotName);

                User::where('id', auth()->user()->id)->update([
                    'back_snapshot' => $back_snapshotName,
                ]);
            }

            User::where('id', auth()->user()->id)->update([
                'doc_type_snap' => $request->doc_type_snap,
            ]);

            // return response(['status' => true, 'message' => 'Success']);
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
