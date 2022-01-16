<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestPackTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'invest_plan_id',
        'reference_id',
        'amount',
        'percentage',
        'duration',
        'profit',
        'total',
        'status',
        'end_date',
    ];

    protected $table = 'invest_pack_transactions';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investPlan()
    {
        return $this->belongsTo(InvestPlan::class);
    }
}
