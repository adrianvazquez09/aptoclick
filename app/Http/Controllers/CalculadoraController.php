<?php

namespace App\Http\Controllers;

use App\Models\catalogoCAT;
use Illuminate\Http\Request;
use App\Models\catalogoPrestamoInfonavit;

class CalculadoraController extends Controller
{
    /* calculadora home */
    public function calculadoraHome(Request $request) {
        
        $uma = $request->salario / 2724.448;
        $uma = number_format($uma, 1, '.', '');

        $prestamo = catalogoCAT::where('sUMA', $uma)->first();
        $mMaximoPesos = number_format($prestamo->mMaximoPesos, 2, '.', ',');
        $tasa = $prestamo->tInteres * 100;
        $mensualidad = number_format($prestamo->pMensualTotal, 2, '.', ',');
        $cat = $prestamo->cat * 100;
        $plazo = 28;

        $respuesta = array('mMaximoPesos' => $mMaximoPesos, 'tasa' => $tasa, 'mensualidad' => $mensualidad, 'cat' => $cat, 'plazo' => $plazo);
        $r = json_encode($respuesta);

        return $r;
    }

    public function calculadoraPerfilInmueble(Request $rr) {

        $uma = $rr->salario / 2724.448;
        $uma = number_format($uma, 1, '.', '');

        $p = catalogoCAT::where('sUMA', $uma)->first();
        $mMaximoPesos = number_format($p->mMaximoPesos, 2, '.', ',');
        $porcentaje = ($rr->vInmueble * 100) / $p->mMaximoPesos;
        $mensualidad = ($p->pMensualTotal * $porcentaje) / 100;
        $mensualidad = number_format($mensualidad, 2, '.', ',');
        $cat = $p->cat * 100;
        $plazo = 28;
        $tasa = $p->tInteres * 100;

        $respuesta = array('mMaximoPesos' => $mMaximoPesos, 'tasa' => $tasa, 'mensualidad' => $mensualidad, 'cat' => $cat, 'plazo' => $plazo);
        $r = json_encode($respuesta);

        return $r;
    }
}
