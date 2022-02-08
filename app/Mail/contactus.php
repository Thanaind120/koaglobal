<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class contactus extends Mailable
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
        
        $this->subject('Contact Us Mail')
        ->from('danutsso1234@gmail.com') 
        ->to('thanai.ots2565@gmail.com')
        ->to('fordfocus120@gmail.com')
       ->markdown('emails.contactus')->with([
            'type_inquiry' => $this->data['type_inquiry'],
            'application' => $this->data['application'],
            'product_category' => $this->data['product_category'],
            'product_message' => $this->data['product_message'],
            'firstname' => $this->data['firstname'],
            'lastname' => $this->data['lastname'],
            'email' => $this->data['email'],
            'company_name' => $this->data['company_name'],
            'area' => $this->data['area'],
            'zip_code' => $this->data['zip_code'],
            
       ]);
  
    }
    
}
