<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SuspiciousLogin extends Mailable
{
    use Queueable, SerializesModels;

    public $user_id;
    public $ip_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_id, $ip_address)
    {
        $this->user_id = $user_id;
        $this->ip_address = $ip_address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.suspiciousLogin')->subject('Suspicious login attempts-blinktraders');
    }
}
