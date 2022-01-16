<?php

namespace App\Http\Controllers\User;

use Image;
use App\Models\User;
use App\Mail\AccountUpgrade;
use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Services\UserAvailableBalance;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }
    
    public function index()
    {
        $systemConfiguration = SystemConfiguration::find(1)->first();
        return view('user.account', [
            'syscfg' => $systemConfiguration,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users,email,'.$request->user_id,
            'username' => 'required|unique:users,username,'.$request->user_id,
            'phone' => 'required|unique:users,phone,'.$request->user_id,
            'profile_pic' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            if($request->file('profile_pic')){
                $profile_picPath = public_path('img/user/');
                if(auth()->user()->profile_pic){
                    unlink($profile_picPath . auth()->user()->profile_pic);
                }
                $profile_picExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $profile_picName = "prf-" . sha1(time()) . $profile_picExtension;
                $profile_picNamePath = $profile_picPath . $profile_picName;
                $profile_picImg = Image::make($request->file('profile_pic'))->resize(100,100)->save($profile_picNamePath);
                $profile_picImg->save();

                User::where('id', auth()->user()->id)->update([
                    'profile_pic' => $profile_picName,
                ]);

            }

            User::where('id', auth()->user()->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'zip_code' => $request->zip_code,
                'country' => $request->country,
            ]);
            
            return redirect()->back()->with('statusSuccess', 'Success');;

        }
    }

    public function upgrade(Request $request)
    {
        $userAvailableBalance = UserAvailableBalance::getAvailableBalance();
        $systemConfiguration = SystemConfiguration::find(1)->first();

        if($userAvailableBalance < 499){
            return back()->with('statusErrorNoAvaBal', 'Input error')->withInput();
        }
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('statusError', 'Input error')->withErrors($validator)->withInput();
        }else{

            User::where('id', auth()->user()->id)->update([
                'upgrade_account' => 1,
                'upgrade_account_amount' => $systemConfiguration->upgrade_fee,
            ]);

            Mail::to(auth()->user())->send(new AccountUpgrade(auth()->user()->username));

            return redirect()->back()->with('statusSuccessUpgrade', 'Success');;

        }
    }
}
