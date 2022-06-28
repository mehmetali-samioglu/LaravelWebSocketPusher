<?php

namespace App\Listeners;

use App\Events\NotificationEvent;
use App\Mail\NotificationMail;
use App\Models\Message;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NotificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle( NotificationEvent $event)
    {
        Message::create(
            [
                'message' => $event->message,
                'email' => $event->email
            ]
        );

        //Burada mail gönderebiliriz.
        // Mail::to($event->email)->send(new NotificationMail($event->email));
    }
}
