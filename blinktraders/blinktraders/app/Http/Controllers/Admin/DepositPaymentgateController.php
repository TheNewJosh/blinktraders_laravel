<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class DepositPaymentgateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    
    public function index()
    {
        $paymentGateway = PaymentGateway::get();

        return view('admin.depositPaymentgate',[
            'paymentGateway' => $paymentGateway,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'max_deposit' => 'numeric',
            'min_deposit' => 'numeric',
            'upload_icon' => 'image|max:2000',
            'upload_qr_img' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusdepositPaymentgate', 'Input error')->withErrors($validator)->withInput();
        }else{
            $uploadIconPath = public_path('img/payment-gateway/');
            $uploadIconExtension = ".png";
            Image::configure(array('driver' => 'gd'));
            $uploadIconName = "icon-" . sha1(time()) . $uploadIconExtension;
            $uploadIconNamePath = $uploadIconPath . $uploadIconName;
            $uploadIconImg = Image::make($request->file('upload_icon'))->resize(100,100)->save($uploadIconNamePath);
            $uploadIconImg->save();

            $uploadQrimgPath = public_path('img/payment-gateway/');
            $uploadQrimgExtension = ".png";
            Image::configure(array('driver' => 'gd'));
            $uploadQrimgName = "qrimg-" . sha1(time()) . $uploadQrimgExtension;
            $uploadQrimgNamePath = $uploadQrimgPath . $uploadQrimgName;
            $uploadQrimgImg = Image::make($request->file('upload_qr_img'))->save($uploadQrimgNamePath);
            $uploadQrimgImg->save();

            PaymentGateway::create([
                'name' => $request->name,
                'max_deposit' => $request->max_deposit,
                'min_deposit' => $request->min_deposit,
                'wallet_address' => $request->wallet_address,
                'upload_icon' => $uploadIconName,
                'upload_qr_img' => $uploadQrimgName,
                'status' => $request->status,
                'coin_short' => $request->short_code,
            ]);
    
            return redirect()->back()->with('statusdepositPaymentgateSuccess', 'Success');
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'max_deposit' => 'numeric',
            'min_deposit' => 'numeric',
            'upload_icon' => 'image|max:2000',
            'upload_qr_img' => 'image|max:2000',
        ]);

        if($validator->fails()) {
            return back()->with('statusdepositPaymentgateUpdate', 'Input error')->withErrors($validator)->withInput();
        }else{

            if($request->file('upload_icon')){
                $uploadIconPath = public_path('img/payment-gateway/');
                if($request->icon_img_hd){
                    unlink($uploadIconPath . $request->icon_img_hd);
                }
                $uploadIconExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $uploadIconName = "icon-" . sha1(time()) . $uploadIconExtension;
                $uploadIconNamePath = $uploadIconPath . $uploadIconName;
                $uploadIconImg = Image::make($request->file('upload_icon'))->resize(100,100)->save($uploadIconNamePath);
                $uploadIconImg->save();

                PaymentGateway::where('id', $request->pgw_id)->update([
                    'upload_icon' => $uploadIconName,
                ]);
            }

            if($request->file('upload_qr_img')){
                $uploadQrimgPath = public_path('img/payment-gateway/');
                if($request->p_img_hd){
                    unlink($uploadQrimgPath . $request->p_img_hd);
                }
                $uploadQrimgExtension = ".png";
                Image::configure(array('driver' => 'gd'));
                $uploadQrimgName = "qrimg-" . sha1(time()) . $uploadQrimgExtension;
                $uploadQrimgNamePath = $uploadQrimgPath . $uploadQrimgName;
                $uploadQrimgImg = Image::make($request->file('upload_qr_img'))->save($uploadQrimgNamePath);
                $uploadQrimgImg->save();

                PaymentGateway::where('id', $request->pgw_id)->update([
                    'upload_qr_img' => $uploadQrimgName,
                ]);
            }

            PaymentGateway::where('id', $request->pgw_id)->update([
                'name' => $request->name,
                'max_deposit' => $request->max_deposit,
                'min_deposit' => $request->min_deposit,
                'wallet_address' => $request->wallet_address,
                'status' => $request->status,
                'coin_short' => $request->short_code,
            ]);
    
            return redirect()->back()->with('statusdepositPaymentgateSuccess', 'Success');
        }
    }

    public function updateCoinPrice()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.coinranking.com/v2/coins',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'x-access-token: coinranking45d580c8a5b9b181bec5f7823e45aab30c094ad9bfbbfb35'
        ),
        ));

        $response = curl_exec($curl);
        $responsej = json_decode($response);
            
        $err = curl_error($curl);

        curl_close($curl);
            
        if($err){

            return 0;

        }else{
            foreach($responsej->data->coins as $coins){
                $pgw = PaymentGateway::where('uuid', $coins->uuid)->update([
                    'price' => $coins->price,
                    'change' => $coins->change,
                    'market_cap' => $coins->marketCap,
                    'btc_price' => $coins->btcPrice,
                ]);
            }
        }
        return redirect()->back()->with('statusdepositPaymentgateSuccess', 'Success');
    }
}
