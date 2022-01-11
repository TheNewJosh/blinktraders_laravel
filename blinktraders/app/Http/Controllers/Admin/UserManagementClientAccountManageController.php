<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;

class UserManagementClientAccountManageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index(User $user)
    {        
        $userAvailableBalance = UserAvailableBalance::getAvailableBalanceID($user->id);
        $userAvailableBalanceProfit = UserAvailableBalance::getAvailableBalanceProfitID($user->id);
        $userAvailableBalanceReferral = UserAvailableBalance::getAvailableBalanceReferralID($user->id);

        return view('admin.userManagementClientAccountManage', [
            'user' => $user,
            'trn_sum_ava' => $userAvailableBalance,
            'trn_sum_pro' => $userAvailableBalanceProfit,
            'trn_sum_ref' => $userAvailableBalanceReferral,
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,'.$request->user_id,
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users,email,'.$request->user_id,
            'phone' => 'required|numeric|unique:users,phone,'.$request->user_id,
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{
            $user = User::where('id', $request->user_id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
                'adj_fee' => $request->adj_fee,
                'adjp_fee' => $request->adjp_fee,
                'adjr_fee' => $request->adjr_fee,
            ]);
            return redirect()->back()->with('statusSuccess', 'Success');;
        }
    }

    public function downloadFile($fname)
    {
        $filep = public_path('img/user/');
        $file = $filep . $fname;
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function kyc(Request $request)
    {
        $user = User::where('id', $request->user_id)->update([
            'kyc_verify' => $request->kyc_verify,
        ]);

        return redirect()->back()->with('statusSuccessKyc', 'Success');;
    }
}
