<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

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
        return $this->from('no-reply@somoscarupano.com.ve')
        ->view('emails.user-register')
        ->with(
            [
                'url' => 'http://somoscarupano.com.ve/login'
            ])
            ->attach(public_path('/assets/website/images').'/logo1.png', [
                  'as' => 'logo1.png',
                  'mime' => 'image/png',
          ]);
    }
}
