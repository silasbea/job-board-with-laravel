<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;
use App\Models\User;

class SignedUp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
    $address = 'mail@pullwork.net';
    $name = 'PW Mailer';
    $subject = 'Pullwork - Signed Up!';
    
    $details = User::where('username',$request->input('user'))->first();

    return $this->markdown('emails.signedup', compact('details'))
                ->from($address, $name)
                ->replyTo($address, $name)
                ->subject($subject);
    }
}
