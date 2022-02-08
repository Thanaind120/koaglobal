<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class register extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $this->subject('Register Mail')
        ->from('danutsso1234@gmail.com') 
        ->to('thanai.ots2565@gmail.com')
        ->to('fordfocus120@gmail.com')
       ->markdown('emails.register')->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'tel' => $this->data['tel'],
            'product_category' => $this->data['product_category'],
            'company_name' => $this->data['company_name'],
            'product_message' => $this->data['product_message'],
            
       ]);
  
    }
    
}
