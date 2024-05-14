<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// implements ShouldQueue
class ContactUsFormMail extends Mailable 
{
    use Queueable, SerializesModels;

    protected $contactName;
    protected $contactEmail;
    protected $service;

    public function __construct($contactName, $contactEmail, $service)
    {
        $this->contactName = $contactName;
        $this->contactEmail = $contactEmail;
        $this->service = $service->serviceName;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Service Inquiry Subimitted',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.customer',
            with: [
                'contactName' => $this->contactName,
                'contactEmail' => $this->contactEmail,
                'service' => $this->service,
            ],
        );
    }


    public function attachments(): array
    {
        return [];
    }
}

