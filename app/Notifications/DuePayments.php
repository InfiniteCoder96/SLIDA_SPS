<?php

namespace App\Notifications;

use App\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DuePayments extends Notification
{
    use Queueable;


    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        $msg = 'A new visitor has visited to your application '. Admin::all()->find(1)->id;
        return (new SlackMessage)
            ->content($msg);
    }
}
