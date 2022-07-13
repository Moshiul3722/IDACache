<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserVerificationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // dd($this->event->user['email']);

        $token = Str::random(60);
        DB::table('password_resets')->insert(['email' => $this->event->user['email'], 'token' => bcrypt($token), 'created_at' => now()]);

        return $this->markdown('backend.emails.userVerificationEmail', ['token'=>$token, 'email'=> $this->event->user['email']])
        // return $this->markdown('backend.emails.userVerificationEmail')
        ->to('abc@info.com')
        ->subject('Test Email')
        ->from('admin@ida.com');
    }
}
