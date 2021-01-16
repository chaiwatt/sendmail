<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSystem extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $from_address = 'contact@npcsolution.com';
        $from_name = 'ชัยวัฒน์';
        $cc_address = 'contact@npcsolution.com';
        $cc_name = 'กาญจนา';
        $subject = 'การส่งเมล์ด้วย sendinblue smtp';
        return $this->view('email')
                    ->from($from_address, $from_name)
                    // ->cc($cc_address, $cc_name)
                    // ->bcc($address, $name)
                    // ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message'] ]);
    }
}
