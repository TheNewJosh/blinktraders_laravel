<?php

namespace App\Mail;

use App\Models\User;
use App\Models\InvestPackTransaction;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvestmentPackEnded extends Mailable
{
    use Queueable, SerializesModels;

    public $user_id;

    public $transact_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user_id, InvestPackTransaction $transact_id)
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
        return $this->markdown('emails.investmentPackEnded')->subject('Investment pack ended-Blinktraders');
    }
}
