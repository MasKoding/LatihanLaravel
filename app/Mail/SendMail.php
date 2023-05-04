<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    // ini untuk deklarasi variabel atau properties
    public $testMailData;
    /**
     * Create a new message instance.
     */
    public function __construct($testMailData)
    {
        //
        $this->testMailData = $testMailData;
    }

    public function build(){
        return $this->subject('Email Untuk Test')
                ->view('email.testMail');
    }
    
    public function attachments(): array
    {
        return [];
    }
}
