<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inmueble;

class HomeController extends Controller
{
    // public function Inicio(){
    //     return view('welcome');
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
