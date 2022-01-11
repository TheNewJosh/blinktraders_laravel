<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referral_id',
        'country',
        'phone',
        'username',
        'address',
        'zip_code',
        'email_verify',
        'phone_verify',
        'upgrade_account',
        'snapshot',
        'referral_user',
        'doc_type_snap',
        'doc_type_prof',
        'signup_fee',
        'adj_fee',
        'adjp_fee',
        'adjr_fee',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
    
    public function copyTrade()
    {
        return $this->hasMany(CopyTrade::class);
    }

    public function investPackTransaction()
    {
        return $this->hasMany(InvestPackTransaction::class);
    }

    public function masterClass()
    {
        return $this->hasMany(MasterClass::class);
    }

    public function referral()
    {
        return $this->hasMany(Referrals::class);
    }
}
