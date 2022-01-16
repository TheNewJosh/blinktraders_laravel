<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KycProofAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        return view('user.kycProofAddress');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'doc_type_prof' => 'required',
        ]);

        if($validator->fails()) {
            // return response(['status' => false, 'message' => $validator]);
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            $proof_snap = $_FILES['proof_snap']['name'];
            if($proof_snap){
                $proof_snapPath = public_path('img/user/');
                if(auth()->user()->proof_snap){
                    unlink($proof_snapPath . auth()->user()->proof_snap);
                }
                $proof_snapTemp = $_FILES['proof_snap']['tmp_name'];
                $proof_snapImg = explode(".", $proof_snap);
                $proof_snapName = "prsnp_".$proof_snapImg[0]."".microtime(true).".".$proof_snapImg[1];
                move_uploaded_file($proof_snapTemp, $proof_snapPath. $proof_snapName);

                User::where('id', auth()->user()->id)->update([
                    'proof_snap' => $proof_snapName,
                ]);

            }

            User::where('id', auth()->user()->id)->update([
                'address' => $request->address,
                'doc_type_prof' => $request->doc_type_prof,
            ]);

            // return response(['status' => true, 'message' => 'Success']);
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
