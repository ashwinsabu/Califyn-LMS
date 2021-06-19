<?php

namespace App\Mail;

use App\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;
    
    public function __construct($otp)
    {
        $this->otp = $otp;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ashwinsabu@gmail.com', 'Calyfn')
            ->subject('OTP for verification')
            ->markdown('mail.forgotPass')
            ->with([
                'name' => 'Calyfn Premium Member',
                'link' => 'https://caliyn.netlify.app/login',
                'otp' => $this->otp
            ]);
    }
}
