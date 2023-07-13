<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $ten="";
    public $email=""; 
    public $sdt=""; 
    public $diachi=""; 
    public $nd=""; 
    public function __construct( $ten, $email,$sdt,$diachi, $nd ){
        $this->ten = $ten;
        $this->email = $email;
        $this->sdt = $sdt;
        $this->diachi = $diachi;
        $this->nd = $nd;
    }
    public function envelope() {
        return new Envelope(subject: 'Mail liên hệ từ khách hàng',);
    }
    public function content() { 
       return new Content( view: 'viewMailLienHe',);
    }
    public function attachments() { return []; 
    
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
