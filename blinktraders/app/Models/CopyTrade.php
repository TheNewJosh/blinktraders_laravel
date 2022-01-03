<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyTrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mt4id',
        'broker',
        'mt4bal',
        'password',
    ];

    protected $table = 'copy_trades';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
