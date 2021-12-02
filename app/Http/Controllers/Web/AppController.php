<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    
    public function redire(){
        return view('pages.redirect');
    }
    
    public function index(){
        return view('pages.index');
    }
    
    public function contacto(){
        return view('pages.contacto');
    }
   
    public function servicios(){
        return view('pages.servicios');
    }
   
    public function galeria(){
        return view('pages.galeria');
    }
   
    public function correo(){
        return view('pages.mails.contacto');
    }

    public function mail__send(Request $request){
        // dd($request);
        $message = [
            'name.required' => 'El campo de nombre es obligatorio',
            'last_name.required' => 'El campo de apellido es obligatorio',
            'email.required' => 'El campo de email es obligatorio',
            'tel.required' => 'El campo de teléfono es obligatorio',
            'mensaje.required' => 'El campo de mensaje es obligatorio',
        ];
        $validatedData = $this -> validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'tel' => 'required|numeric|min:6',
            'mensaje' => 'required',
        ], $message);

        Mail::to('13fernando10@gmail.com') -> send(new ContactoMail($request));
        return response(['success' => true], 200);
    }

    

}
