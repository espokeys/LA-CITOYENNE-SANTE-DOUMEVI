<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactPublicMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $telephone;
    public $messageContent;

    public function __construct($name, $email, $telephone, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('Message de Contact Public - Site DOUMEVI')
                    ->view('emails.contact_public')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'telephone' => $this->telephone,
                        'messageContent' => $this->messageContent,
                    ]);
    }
}
