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
            'firstname' => $this->data['firstname'],
            'lastname' => $this->data['lastname'],
            'email' => $this->data['email'],
            'tel' => $this->data['tel'],
            'title_name' => $this->data['title_name'],
            'department_name' => $this->data['department_name'],
            'organization_name' => $this->data['organization_name'],
            'location_name' => $this->data['location_name'],
            'product_message' => $this->data['product_message'],
            
       ]);
  
    }
    
}
