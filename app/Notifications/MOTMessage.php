<?php

namespace TireManager\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use TireManager\Http\Requests\MOTFormRequest;

class MOTMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $message;
    public function __construct(MOTFormRequest $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
   return (new MailMessage)
                    ->subject("MOT Enquiries")
                    ->greeting(" ")
                    ->salutation(" ")
                    ->from('bookings@tm.com', $this->message->name)
                    ->line("Name: ". $this->message->name)
                    ->line("Phone Nr: ". $this->message->phone)
                    ->line("Booking date: ". $this->message->motdate);
                }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
