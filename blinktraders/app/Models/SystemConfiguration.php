<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_email',
        'withdraw_charge',
        'deposit_charge',
        'upgrade_fee',
        'kyc',
        'email_verification',
        'sms_verification',
        'upgrade_status',
        'email_notify',
        'sms_notify',
        'registration',
        'referral',
        'subject',
        'address',
    ];
}
