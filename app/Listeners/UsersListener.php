<?php

namespace App\Listeners;

use App\Events\UsersEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerificationEmail;

class UsersListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UsersEvent  $event
     * @return void
     */
    public function handle(UsersEvent $event)
    {
        // dd($event->user['name']);
        // info('User event fired');
        Mail::send(new UserVerificationEmail($event));
    }
}
