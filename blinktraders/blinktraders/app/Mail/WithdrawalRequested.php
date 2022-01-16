<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Transactions;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WithdrawalRequested extends Mailable
{
    use Queueable, SerializesModels;

    public $user_id;

    public $transact_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user_id, Transactions $transact_id)
    {
        $this->user_id = $user_id;
        $this->transact_id = $transact_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.withdrawalRequested')->subject('Withdrawal requested-Blinktraders');
    }
}
