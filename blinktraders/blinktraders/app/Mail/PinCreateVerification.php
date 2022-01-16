<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PinCreateVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.pinCreateVerification')->subject('Create Pin verification');
    }
}
