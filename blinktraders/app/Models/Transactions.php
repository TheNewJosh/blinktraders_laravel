<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_gateway_id',
        'transact_type',
        'reference_id',
        'wallet_address',
        'amount',
        'coin_amount',
        'charges',
        'percent',
        'status',
        'withdraw_source',
    ];

    protected $table = 'transactions';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paymentGateway()
    {
        return $this->belongsTo(PaymentGateway::class);
    }
}
