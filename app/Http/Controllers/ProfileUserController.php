<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    public function index($userId){

        $cliente = Cliente::where('id_usuario', Auth::user()->id)->first();
        // return $cliente;
        return view('profile.user', ['c' => $cliente]);
    }

    public function update(Request $request, Cliente $id){                

        $id->id_usuario = Auth::user()->id;
        $id->nombres = $request->nombre;
        $id->primerApellido = $request->apPat;
        $id->segundoApellido = $request->apMat;
        $id->fechaNacimiento = $request->fechaNacimiento;
        $id->nss = $request->nss;
        $id->rfc = $request->rfc;
        $id->curp = $request->curp;

        if($request->hasFile('doc_curp')){
            $id->doc_curp =$request->file('doc_curp')->store('public');
        }

        if($request->hasFile('doc_rfc')){
            $id->doc_rfc = $request->file('doc_rfc')->store('public');
        }

        if($request->hasFile('doc_nss')){
            $id->doc_nss = $request->file('doc_nss')->store('public');
        }




        $id->save();

        return redirect()->route('profile.user',$id);
        //return $id;
    }
}
