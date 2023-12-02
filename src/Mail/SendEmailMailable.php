<?php

namespace Andreu\LaravelMail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $subject;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->subject = $request->subject;
        $this->body = $request->body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('laravelMail::emails.email', [
            'subject' => $this->subject,
            'body' => $this->body
        ]);
    }
}
