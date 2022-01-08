<?php

namespace App\Http\Controllers\Admin;

use App\Models\InvestPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class InvestPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $investPlan = InvestPlan::get();

        return view('admin.investPlan', [
            'investPlan' => $investPlan,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'max_amount' => 'numeric',
            'min_amount' => 'numeric',
            'percent_referral' => 'numeric',
            'percent' => 'numeric',
            'duration' => 'numeric',
            'icon' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusErrorStore', 'Input error')->withErrors($validator)->withInput();
        }else{
            if($request->file('icon')){
                $iconPath = public_path('img/invest-plan/');
                $iconExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $iconName = "icon-" . sha1(time()) . $iconExtension;
                $iconNamePath = $iconPath . $iconName;
                $iconImg = Image::make($request->file('icon'))->resize(100,100)->save($iconNamePath);
                $iconImg->save();
            }else{
                $iconName = "";
            }
            
            InvestPlan::create([
                'name' => $request->name,
                'max_amount' => $request->max_amount,
                'min_amount' => $request->min_amount,
                'percent_referral' => $request->percent_referral,
                'percent' => $request->percent,
                'percent_ref' => $request->percent_ref,
                'duration' => $request->duration,
                'icon' => $iconName,
                'type_in' => $request->type_in,
                'status' => $request->status,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'max_amount' => 'numeric',
            'min_amount' => 'numeric',
            'percent_referral' => 'numeric',
            'percent' => 'numeric',
            'duration' => 'numeric',
            'icon' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusErrorUpdate', 'Input error')->withErrors($validator)->withInput();
        }else{

            if($request->file('icon')){
                $iconPath = public_path('img/invest-plan/');
                unlink($iconPath . $request->icon_img_hd);
                $iconExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $iconName = "icon-" . sha1(time()) . $iconExtension;
                $iconNamePath = $iconPath . $iconName;
                $iconImg = Image::make($request->file('icon'))->resize(100,100)->save($iconNamePath);
                $iconImg->save();

                InvestPlan::where('id', $request->inp_id)->update([
                    'icon' => $iconName,
                ]);
            }

            InvestPlan::where('id', $request->inp_id)->update([
                'name' => $request->name,
                'max_amount' => $request->max_amount,
                'min_amount' => $request->min_amount,
                'percent_referral' => $request->percent_referral,
                'percent' => $request->percent,
                'percent_ref' => $request->percent_ref,
                'duration' => $request->duration,
                'type_in' => $request->type_in,
                'status' => $request->status,
            ]);
    
            return redirect()->back()->with('statusSuccess', 'Success');
        }
    }
}
