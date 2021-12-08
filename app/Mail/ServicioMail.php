<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ServicioMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Servicios";
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
        // dd($this->data->hasFile('image'));
        if($this->data->hasFile('image')){
            return $this->view('pages.mails.contacto_servicio')-> with([
                "nombre" => $this -> data -> name,
                "apellido" => $this -> data -> last_name,
                "email" => $this -> data -> email,
                "telefono" => $this -> data -> tel,
                "mensaje" => $this -> data-> mensaje,
                "helpselect" => $this -> data-> helpselect,
                "inputCity" => $this -> data-> inputCity,
                "state" => $this -> data-> state,
                "country" => $this -> data-> country,
            ])->attach(
                $this->data->image->getRealPath(),
                [
                    'as' => $this->data->image->getClientOriginalName(),
                    'mime' => $this->data->image->getClientMimeType(),
                 ]);
        }else{
            return $this->view('pages.mails.contacto_servicio')-> with([
                "nombre" => $this -> data -> name,
                "apellido" => $this -> data -> last_name,
                "email" => $this -> data -> email,
                "telefono" => $this -> data -> tel,
                "mensaje" => $this -> data-> mensaje,
                "helpselect" => $this -> data-> helpselect,
                "inputCity" => $this -> data-> inputCity,
                "state" => $this -> data-> state,
                "country" => $this -> data-> country,
            ]);
        }
        
    }
}
