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
        'percent',
        'percent_ref',
        'price',
        'duration',
        'type_in',
        'status',
    ];

    public function investPackTransaction()
    {
        return $this->hasMany(InvestPackTransaction::class);
    }
}
