<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use App\Rules\Recaptcha;


class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('app');
    }

    public function procesarFormulario(Request $request)
    {
        // Mensajes de error personalizados
        $messages = [
            'name.required' => 'El campo de nombre es obligatorio.',
            'name.regex' => 'El formato del nombre es inválido.',
            'name.max' => 'El nombre no puede tener más de 50 caracteres.',
            'email.required' => 'El campo de email es obligatorio.',
            'email.email' => 'El email debe ser una dirección válida.',
            'email.max' => 'El email no puede tener más de 50 caracteres.',
            'numero.required' => 'El campo de número de teléfono es obligatorio.',
            'numero.digits_between' => 'El número de teléfono debe tener entre 8 y 12 dígitos.',
            'message.required' => 'El campo de mensaje es obligatorio.',
            'message.min' => 'El mensaje debe tener al menos 15 caracteres.',
            'message.max' => 'El mensaje no puede tener más de 200 caracteres.',
        ];

        // Validación de los campos del formulario
        $request->validate([
            'name' => 'required|regex:/^[\pL\s]+$/u|max:50',
            'email' => 'required|email|max:50',
            'numero' => 'required|numeric|digits_between:8,12',
            'message' => 'required|min:15|max:200',
            'g-recaptcha-response' => ['required', new Recaptcha]
        ], $messages);

        // Datos del formulario
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'numero' => $request->numero,
            'message' => $request->message,
        ];

        

        // Envío del correo electrónico
        Mail::to('paginadegabrielbetti@gmail.com')->send(new ContactoMailable($details, $request->email, $request->name));
    
        return redirect('/formulario#gtco-contact')->with('success', '¡El formulario ha sido enviado exitosamente!');
    }
    
    
    }
