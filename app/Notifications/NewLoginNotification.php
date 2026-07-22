<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewLoginNotification extends Notification
{
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)

            ->subject('Nouvelle connexion')

            ->line('Une connexion vient d\'être effectuée.')

            ->line('Si ce n\'est pas vous, modifiez immédiatement votre mot de passe.');
    }
}