<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $subj;
    private $name;
    private $mesg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mesg, $name, $email, $subj)
    {
        $this->mesg = $mesg;
        $this->name = $name;
        $this->subj = $subj;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.message', [
            'mesg' => $this->mesg,
            'subj' => $this->subj,
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}
