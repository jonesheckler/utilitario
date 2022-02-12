<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details, $fields, $replyto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $fields, $replyto)
    {
        $this->details = $details;
        $this->fields = $fields;
        $this->replyto = $replyto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->details['subject'])
        ->replyTo($this->replyto['mail'], $this->replyto['name'])
        ->view('emails.myTestMail');
    }
}
