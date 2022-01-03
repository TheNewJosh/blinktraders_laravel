<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $user_all = User::get()->count();
        $user_1 = User::Where('status', '=', 1)->get()->count();
        $user_0 = User::Where('status', '=', 0)->get()->count();

        $trn_deposit_all = Transactions::Where('transact_type', '=', 0)->get()->count();
        $trn_deposit_2 = Transactions::Where('transact_type', '=', 0)->Where('status', '=', 2)->get()->count();
        $trn_deposit_1 = Transactions::Where('transact_type', '=', 0)->Where('status', '=', 1)->get()->count();
        $trn_deposit_0 = Transactions::Where('transact_type', '=', 0)->Where('status', '=', 0)->get()->count();

        $trn_withdraw_all = Transactions::Where('transact_type', '=', 1)->get()->count();
        $trn_withdraw_2 = Transactions::Where('transact_type', '=', 1)->Where('status', '=', 2)->get()->count();
        $trn_withdraw_1 = Transactions::Where('transact_type', '=', 1)->Where('status', '=', 1)->get()->count();
        $trn_withdraw_0 = Transactions::Where('transact_type', '=', 1)->Where('status', '=', 0)->get()->count();

        return view('admin.index', [
            'user_all' => $user_all,
            'user_1' => $user_1,
            'user_0' => $user_0,
            'trn_deposit_all' => $trn_deposit_all,
            'trn_deposit_2' => $trn_deposit_2,
            'trn_deposit_1' => $trn_deposit_1,
            'trn_deposit_0' => $trn_deposit_0,
            'trn_withdraw_all' => $trn_withdraw_all,
            'trn_withdraw_2' => $trn_withdraw_2,
            'trn_withdraw_1' => $trn_withdraw_1,
            'trn_withdraw_0' => $trn_withdraw_0,
        ]);
    }
}
