<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerify extends Mailable
{
    use Queueable, SerializesModels;

    public $verifyToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($verifyToken)
    {
         $this->verifyToken = $verifyToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('usmananwar007@outlook.com')
        ->view('frontend.emails.verifyemail')
        ->with($this->verifyToken);
    }
}
