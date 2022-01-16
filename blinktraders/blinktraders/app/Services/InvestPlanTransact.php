<?php

namespace App\Services;

use App\Models\InvestPackTransaction;

class InvestPlanTransact
{
    public function checkTransactionExistUser($user)
    {
        return InvestPackTransaction::where('user_id', $user)->where('status', 1)->get()->count();
    }
}