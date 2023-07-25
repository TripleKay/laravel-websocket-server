<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SomethingHappened extends Notification
{
    use Queueable;

    public function __construct(public string $text)
    {}

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'text' => $this->text,
        ];
    }
}
