<?php

namespace App\Listeners;

use App\Events\PasswordUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewPassword
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PasswordUpdate $event): void
    {
        Mail::raw("ramze shoma : {$event->password}" ,
            function ($message) use ($event){
                $message->to($event->user->email);
            });
    }
}
