<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $email;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $email, $name)
    {
        $this->details = $details;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->name)
                    ->subject('Nuevo mensaje de contacto')
                    ->view('emails.contacto');
    }
}

