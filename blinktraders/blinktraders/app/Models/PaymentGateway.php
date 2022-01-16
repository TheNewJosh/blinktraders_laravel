<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_deposit',
        'min_deposit',
        'wallet_address',
        'upload_icon',
        'upload_qr_img',
        'status',
        'coin_short',
        'price',
        'change',
        'market_cap',
        'btc_price',
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
