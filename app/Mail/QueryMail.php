<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QueryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $phone;
    public $bodyMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $phone, $bodyMessage)
    {
        $this->title = htmlspecialchars($title);
        $this->phone = htmlspecialchars($phone);
        $this->bodyMessage = htmlspecialchars($bodyMessage);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('asif-c63f2a@inbox.mailtrap.io', 'Contact Us')
            ->view('email.querymail');
    }
}
