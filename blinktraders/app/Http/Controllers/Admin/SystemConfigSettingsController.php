<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SystemConfigSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(SystemConfiguration $adm_id)
    {
        return view('admin.systemConfigSettings', [
            'sysc' => $adm_id,
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'company_email' => 'required|email|max:255',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            SystemConfiguration::where('id', $request->id)->update([
                'company_name' => $request->company_name,
                'company_email' => $request->company_email,
                'withdraw_charge' => $request->withdraw_charge,
                'deposit_charge' => $request->deposit_charge,
                'upgrade_fee' => $request->upgrade_fee,
                'kyc' => $request->kyc,
                'email_verification' => $request->email_verification,
                'sms_verification' => $request->sms_verification,
                'upgrade_status' => $request->upgrade_status,
                'email_notify' => $request->email_notify,
                'sms_notify' => $request->sms_notify,
                'registration' => $request->registration,
                'referral' => $request->referral,
                'subject' => $request->subject,
                'address' => $request->address,
            ]);

            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }
}
