<?php

namespace App\Listeners;

use App\Events\UserSubscribe;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscribeMail
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
    public function handle(UserSubscribe $event): void
    {
        Mail::raw('با تشکر - ایمیل خام راو از طریق ایونت و لیستنر برای شما ارسال شده است' , function ($message) use
        ($event){
            $message->to($event->user->email);
            $message->subject('mozoooooooooou');
        });
    }
}
