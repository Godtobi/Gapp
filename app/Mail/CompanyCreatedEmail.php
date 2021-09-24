<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyCreatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $companyEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($companyEmail)
    {
        $this->companyEmail = $companyEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Company created")->to($this->companyEmail)
            ->markdown('emails.companyCreated');
    }
}
