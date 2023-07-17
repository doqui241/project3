<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(private $name, private $email, private $price, private $date_order, private $quantity, private $ticket_name, private $session_id)
    {
        $this->price = number_format($this->price, 0, ',', '.');
        $this->date_order = date('d/m/Y', strtotime($this->date_order));
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Mail liên hệ từ khách hàng',);
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return new Content(   view: 'email.export', with: ['name' => $this->name, 'email' => $this->email, 'price' => $this->price, 'date_order' => $this->date_order, 'quantity' => $this->quantity, 'ticket_name' => $this->ticket_name, 'session_id' => $this->session_id],);
      
           
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    /**
     * Create a new message instance.
     */
  

    /**
     * Get the message envelope.
     */
 

    /**
     * Get the message content definition.
     */

}
