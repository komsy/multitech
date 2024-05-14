<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class TeamContactUsFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactName;
    protected $contactEmail;
    protected $service;
    protected $contactMessage;
    protected $salesNumber;

    public function __construct($contactName, $contactEmail, $service,$contactMessage,$salesNumber)
    {
        $this->contactName = $contactName;
        $this->contactEmail = $contactEmail;
        $this->service = $service->serviceName;
        $this->contactMessage = $contactMessage;
        $this->salesNumber =$salesNumber->salesNumber;
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
            view: 'emails.sales',
            with: [
                'contactName' => $this->contactName,
                'contactEmail' => $this->contactEmail,
                'salesNumber' => $this->salesNumber,
                'contactMessage' => $this->contactMessage,
                'service' => $this->service,
            ],
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
