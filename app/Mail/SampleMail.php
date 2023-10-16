<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
 public function build()
{
    return $this->from('your-email@example.com', 'VISADONE')
        ->view('mails.user_created')
        ->subject('New User Created')
        ->with(['user_name' => 'Aditya Yadav','email'=>'aditya.yadav@satgurutravel.com','password'=>'987456','url'=>'https://visadone.com/laravel_demo/laravel8/public/login']);
}

}
