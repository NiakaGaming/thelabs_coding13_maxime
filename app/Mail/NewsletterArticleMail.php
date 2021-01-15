<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterArticleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($m)
    {
        $this->mail = $m;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.article')->with([
            "title" => $this->mail->title,
            "text" => $this->mail->text,
            "img" => $this->mail->img,
            "categorie" => $this->mail->categorie,
            "tag" => $this->mail->tag,
        ]);
    }
}
