<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Contacto";
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this -> data = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mails.contacto')-> with([
            "nombre" => $this -> data -> name,
            "apellido" => $this -> data -> last_name,
            "email" => $this -> data -> email,
            "telefono" => $this -> data -> tel,
            "mensaje" => $this -> data-> mensaje,
        ]);
    }
}
