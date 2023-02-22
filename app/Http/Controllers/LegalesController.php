<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalesController extends Controller
{
    public function Manifesto(){
        return view('manifesto');
    }

    public function Faqs(){
        return view('faqs');
    }

    public function AvisoPrivacidad() {
        return view('legales.avisoPrivacidad');
    }

    public function TerminosCondiciones() {
        return view('legales.terminosCondiciones');  
    }
}
