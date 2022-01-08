<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'max_amount',
        'min_amount',
        'percent',
        'percent_ref',
        'percent_referral',
        'duration',
        'type_in',
        'status',
    ];

    public function investPackTransaction()
    {
        return $this->hasMany(InvestPackTransaction::class);
    }
}
