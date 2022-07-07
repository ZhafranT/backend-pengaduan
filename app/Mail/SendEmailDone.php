<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailDone extends Mailable
{
    public $isi_email;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($isi_email)
    {
        $this->isi_email = $isi_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pelayanankonsumennotif@gmail.com')
                    ->subject('Pengaduan Selesai')
                    ->view('Email.emaildone');
    }
}
