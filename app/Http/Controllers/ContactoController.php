<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function EnviarCorreoCita(Request $r){
        $r->validate([
            'nombres' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
        ]);
        
        $correo = new ContactoMailable($r->all());
    
        Mail::to('hola@aptoclick.com')->send($correo);

        // return $r;
        return redirect()->route('propiedades.venta.perfil', $r->idInmueble);
    }
}
