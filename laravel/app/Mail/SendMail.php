<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $data)
    {
        //
        $this->data = $data;
        $this->subject = $subject;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emailku')
        ->subject($this->subject)
        ->with('data', $this->data);
        // ->attach(public_path('/img/logo_kabinet.png'), [
        //     'as'    => 'logo_kabinet.png',
        //     'mime'  => 'image/png',
        // ]);
}
}
