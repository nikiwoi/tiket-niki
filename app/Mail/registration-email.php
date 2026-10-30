<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public array $registrationData;

    /**
     * Create a new message instance.
     */
    public function __construct(
        array|string $registrationData = [],
        ?string $email = null,
        ?string $phone = null,
        ?string $ticketType = null,
        int|string|null $quantity = null,
    ) {
        if (is_array($registrationData)) {
            $this->registrationData = $registrationData;
        } else {
            $this->registrationData = array_filter([
                'name' => $registrationData,
                'email' => $email,
                'phone' => $phone,
                'ticket_type' => $ticketType,
                'quantity' => $quantity,
            ], fn ($value) => $value !== null);
        }
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Neon Nights Tour - Ticket Registration Confirmed!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-template.registration-successful',
            with: [
                'name' => $this->registrationData['name'] ?? 'Concert Goer',
                'email' => $this->registrationData['email'] ?? '',
                'phone' => $this->registrationData['phone'] ?? '',
                'ticketType' => $this->registrationData['ticket_type'] ?? $this->registrationData['ticket-type'] ?? 'ga',
                'quantity' => (int) ($this->registrationData['quantity'] ?? 1),
                'bookingCode' => $this->registrationData['booking_code'] ?? strtoupper('NNT-' . substr(md5(uniqid((string) mt_rand(), true)), 0, 8)),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

