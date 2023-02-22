<?php

namespace App\Http\Controllers;

use App\Models\catalogoEdad;
use App\Models\catalogoPrestamoInfonavit;
use App\Models\catalogoPresupuestoInmueble;
use App\Models\catalogoSalarioRegistrado;
use App\Models\catalogoSaldoSubcuenta;
use App\Models\catalogoSepomex;
use App\Models\catalogoTiempoBimiestre;
use App\Models\catalogoTipoTrabajador;
use App\Models\Cliente;
use App\Models\precalificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrecalificacionController extends Controller
{

    /* paso1 */
    public function presupuestoInmueble($tp)
    {

        $pi = catalogoPresupuestoInmueble::all();

        if ($tp == 0) {
            $tp = time(); //token para precalificacion
            $opt = 0;

            $precal = precalificacion::where('id_usuario', '=', Auth::user()->id)
                ->where('precalStatus', '=', 1)
                ->first();

            if (!empty($precal)) {
                $tp = $precal->tokenPrecalificacion;
                $opt = $precal->id_presupuestoInmueble;
            }
        } else {
            $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
                ->where('precalStatus', '=', 1)
                ->first();

            $opt = $precal->id_presupuestoInmueble;
        }

        // return $precal;
        return view('precalificacion.presupuesto', ['pi' => $pi, 'tp' => $tp, 'opt' => $opt]);
    }

    /* paso1 post */
    public function presupuestoInmuebleSave(Request $request)
    {

        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $precalificacion = new precalificacion();
        $precalificacion->tokenPrecalificacion = $request->tokenPrecalificacion;
        $precalificacion->id_presupuestoInmueble = $request->presupuestoInmueble;
        $precalificacion->precalStatus = 1;
        $precalificacion->id_usuario = Auth::user()->id;

        if (!empty($precal)) {
            $u = precalificacion::where('id', $precal->id)->update(['tokenPrecalificacion' => $precalificacion->tokenPrecalificacion, 'id_presupuestoInmueble' => $precalificacion->id_presupuestoInmueble, 'precalStatus' => $precalificacion->precalStatus]);
        } else {
            $precalificacion->save();
        }

        return redirect()->route('precalificate.paso2', $request->tokenPrecalificacion);
    }

    /* paso2 */
    public function lugarVivienda($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1', 0);
        }
        
        // return $precal;
        return view('precalificacion.lugarVivienda', ['tp' => $tp]);
    }

    public function sepomex(Request $request){

        switch ($request->opt) {
            case 0:
                $sepomex = catalogoSepomex::select('estado')->distinct()->where('cp', '=', $request->cp)->get();
                break;

            case 1:
                $sepomex = catalogoSepomex::select('municipio')->distinct()->where('cp', '=', $request->cp)->get();
                break;
            
            case 2:
                $sepomex = catalogoSepomex::select('colonia')->distinct()
                                            ->where('municipio', '=', $request->municipio)
                                            ->where('cp', '=', $request->cp)->get();
                break;
        }
        return $sepomex;
    }

    /* paso2 post */

    public function lugarViviendaSave(Request $request)
    {   
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
        ->where('precalStatus', '=', 1)
        ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1', 0);
        }

        $sepomex = catalogoSepomex::where('municipio', '=', $request->municipio)
                                    ->where('colonia', '=', $request->colonia)
                                    ->where('cp', '=', $request->zipCode)->first();

        $p = precalificacion::where('id', $precal->id)->update(['id_sepomex' => $sepomex->id]);
        
        // return $sepomex->id;
        return redirect()->route('precalificate.paso3', $request->tokenPrecalificacion);
    }

    /* paso3 */
    public function edad($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1', 0);
        }

        $fNac = $precal->fechaNacimiento;
        $age = $precal->edad;

        // return $precal;
        return view('precalificacion.edad', ['tp' => $tp, 'fNac' => $fNac, 'age' => $age]);
    }

    /* paso3 post */
    public function edadSave(Request $request)
    {
        $p = new PuntajeT();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $precalificacion = new precalificacion();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1', 0);
        }

        $edad = $request->age;
        $rangoMaximo = catalogoEdad::whereRaw('rango = (select max(rango) from catalogo_edades)')->first();

        if ($rangoMaximo->rango > $edad) {
            $rangoEdadMinima = catalogoEdad::where('rango', '<=', $edad)->orderBy('rango', 'desc')->first();
            $rmin = $rangoEdadMinima->id;
            $rangoEdadMaxima = catalogoEdad::where('rango', '>=', $edad)->first();
            $rmax = $rangoEdadMaxima->id;
            $puntaje = $rangoEdadMaxima->puntaje;
        } else {
            $rmax = $rangoMaximo->rango;
            $rmin = $rangoMaximo->rango;
            $puntaje = $rangoMaximo->puntaje;
        }

        $precalificacion->fechaNacimiento = $request->fechaNacimiento;
        $precalificacion->edad = $request->age;
        $precalificacion->id_edadMin = $rmin;
        $precalificacion->id_edadMax = $rmax;
        $precalificacion->puntajeEdad = $puntaje;

        $u = precalificacion::where('id', $precal->id)->update(['fechaNacimiento' => $precalificacion->fechaNacimiento, 'id_edadMin' => $precalificacion->id_edadMin, 'id_edadMax' => $precalificacion->id_edadMax, 'puntajeEdad' => $precalificacion->puntajeEdad, 'edad' => $precalificacion->edad]);
        $p->PuntajeTotal($precal->id);

        // return $precal;
        return redirect()->route('precalificate.paso4', $request->tokenPrecalificacion);
    }

    /* paso4 */
    public function datosGenerales($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
                                    ->where('precalStatus', '=', 1)
                                    ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1', 0);
        }

        $c = Cliente::where('id_usuario', Auth::user()->id)->first();
        $fRfc = substr($precal->fechaNacimiento, 2, 2).substr($precal->fechaNacimiento, 5, 2).substr($precal->fechaNacimiento, 8, 2);

        // return $c->nombres;
        return view('precalificacion.datosGenerales', ['tp' => $tp, 'cliente' => $c, 'fNac' => $fRfc]);
    }

    /* paso4 post */
    public function datosGeneralesSave(Request $request){

        $c = Cliente::where('id_usuario', Auth::user()->id)->update(['nombres' => $request->nombres, 'primerApellido' => $request->primerApellido, 'segundoApellido' => $request->segundoApellido, 'curp' => $request->curp, 'rfc' => $request->rfc, 'nss' => $request->nss]);

        // return $request;
        return redirect()->route('precalificate.paso5', $request->tokenPrecalificacion);
    }

    /* paso5 */
    public function bimestresTrabajo($tp)
    {
        $bt = catalogoTiempoBimiestre::all();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1');
        }

        $opt = $precal->id_tiempoBimestre;

        // return $precal;
        return view('precalificacion.bimestresTrabajados', ['tp' => $tp, 'bt' => $bt, 'opt' => $opt]);
    }

    /* paso5 post */
    public function bimestresTrabajoSave(Request $request)
    {
        $p = new PuntajeT();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $puntaje = catalogoTiempoBimiestre::where('id', '=', $request->tiempoBimestre)->first();

        $precalificacion = new precalificacion();

        $precalificacion->id_tiempoBimestre = $request->tiempoBimestre;

        $u = precalificacion::where('id', $precal->id)->update(['id_tiempoBimestre' => $precalificacion->id_tiempoBimestre, 'puntajeTiempoBimestre' => $puntaje->puntaje]);
        $p->PuntajeTotal($precal->id);
        // return $puntaje;
        return redirect()->route('precalificate.paso6', $request->tokenPrecalificacion);
    }

    /* paso6 */
    public function salarioRegistrado($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1');
        }

        $sr = $precal->salarioRegistrado;

        // return $precal;
        return view('precalificacion.salarioRegistrado', ['tp' => $tp, 'sr' => $sr]);
    }

    /* paso6 post */
    public function salarioRegistradoSave(Request $request)
    {
        $p = new PuntajeT();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $rangoMaximo = catalogoSalarioRegistrado::whereRaw('puntaje = (select max(puntaje) from catalogo_salario_registrado)')->first();

        if ($rangoMaximo->rango > $request->salarioRegistrado) {
            $rangoSalarioMin = catalogoSalarioRegistrado::where('rango', '<=', $request->salarioRegistrado)->orderBy('id', 'asc')->first();
            $srmin = $rangoSalarioMin->id;
            $rangoSalarioMax = catalogoSalarioRegistrado::where('rango', '>=', $request->salarioRegistrado)->orderBy('id', 'asc')->first();
            $srmax = $rangoSalarioMax->id;
            $puntaje = $rangoSalarioMax->puntaje;
        } else {
            $srmin = $rangoMaximo->id;
            $srmax = $rangoMaximo->id;
            $puntaje = $rangoMaximo->puntaje;
        }

        $u = precalificacion::where('id', $precal->id)->update(['salarioRegistrado' => str_replace(',', '', $request->salarioRegistrado), 'id_salarioRegistradoMin' => $srmin, 'id_salarioRegistradoMax' => $srmax, 'puntajeSalarioRegistrado' => $puntaje]);
        $p->PuntajeTotal($precal->id);
        // return $puntaje;
        return redirect()->route('precalificate.paso7', $request->tokenPrecalificacion);
    }

    /* paso7 */
    public function saldoSubcuenta($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1');
        }

        $opt = $precal->id_saldoSubcuenta;
        $ss = catalogoSaldoSubcuenta::all();

        return view('precalificacion.saldoSubcuenta', ['tp' => $tp, 'opt' => $opt, 'ss' => $ss]);
    }

    /* paso7 post */
    public function saldoSubcuentaSave(Request $request)
    {
        $p = new PuntajeT();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $puntaje = catalogoSaldoSubcuenta::where('id', '=', $request->saldoSubcuenta)->first();

        $precalificacion = new precalificacion();

        $precalificacion->id_saldoSubcuenta = $request->saldoSubcuenta;

        $u = precalificacion::where('id', $precal->id)->update(['id_saldoSubcuenta' => $precalificacion->id_saldoSubcuenta, 'puntajeSaldoSubcuenta' => $puntaje->puntaje]);
        $p->PuntajeTotal($precal->id);
        // return $precal;
        return redirect()->route('precalificate.paso8', $request->tokenPrecalificacion);
    }

    /* paso8 */
    public function tipoTrabajador($tp)
    {
        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 1)
            ->first();

        if (empty($precal)) {
            return redirect()->route('precalificate.paso1');
        }

        $opt = $precal->id_tipoTrabajador;
        $tt = catalogoTipoTrabajador::all();

        return view('precalificacion.tipoTrabajador', ['tp' => $tp, 'opt' => $opt, 'tt' => $tt]);
    }

    /* paso8 post */
    public function tipoTrabajadorSave(Request $request)
    {
        $p = new PuntajeT();
        $precal = precalificacion::where('tokenPrecalificacion', '=', $request->tokenPrecalificacion)
            ->where('precalStatus', '=', 1)
            ->first();

        $puntaje = catalogoTipoTrabajador::where('id', '=', $request->tipoTrabajador)->first();

        $precalificacion = new precalificacion();

        $precalificacion->id_tipoTrabajador = $request->tipoTrabajador;

        $precalificacion->puntajeTipoTrabajador = $puntaje->puntaje;
        $precalificacion->precalStatus = 2;
        // $precalificacion->precalStatus = 1; 

        $pa = precalificacion::where('id_usuario', '=', $precal->id_usuario)
            ->where('id', '<>', $precal->id)
            ->update(['precalStatus' => 0]);

        $u = precalificacion::where('id', $precal->id)->update(['id_tipoTrabajador' => $precalificacion->id_tipoTrabajador, 'precalStatus' => $precalificacion->precalStatus, 'puntajeTipoTrabajador' => $precalificacion->puntajeTipoTrabajador]);
        $c = Cliente::where('id_usuario', $precal->id_usuario)->update(['fechaNacimiento' => $precal->fechaNacimiento]);
        $p->PuntajeTotal($precal->id);

        // return $precal;
        return redirect()->route('precalificate.score', $request->tokenPrecalificacion);
    }

    /* notificacion de precalificacion */
    public function notificacionScore($tp)
    {

        $precal = precalificacion::where('tokenPrecalificacion', '=', $tp)
            ->where('precalStatus', '=', 2)
            ->first();

        if ($precal->puntajeTotal >= 1080) {
            $tituloNotificacion = "¡Felicidades!";
            $tituloStatus = 'Precalificado';
            $tituloPuntaje = $precal->puntajeTotal;

            $salarioMax = catalogoPrestamoInfonavit::whereRaw('rango = (select max(rango) from catalogo_prestamos_infonavit)')->first();

            if ($salarioMax->rango <= $precal->salarioRegistrado) {
                $tituloPrestamoInfonavit = $salarioMax->prestamo;
            } else {
                $prestamo = catalogoPrestamoInfonavit::where('rango', '<=', $precal->salarioRegistrado)->orderBy('rango', 'desc')->first();
                $tituloPrestamoInfonavit = $prestamo->prestamo;
            }
        } else {
            $tituloNotificacion = "¡Muchas gracias!";
            $tituloStatus = 'No Precalificado';
            $tituloPuntaje = $precal->puntajeTotal;
            $tituloPrestamoInfonavit = 0;
        }

        // return $prestamo;
        return view('precalificacion.score', ['tituloNotificacion' => $tituloNotificacion, 'tituloPuntaje' => $tituloPuntaje, 'tituloStatus' => $tituloStatus, 'tituloPrestamoInfonavit' => $tituloPrestamoInfonavit]);
    }
}

/* clases auxiliares */
class PuntajeT
{
    /* metodo para calculo del puntaje de precalificacion */
    public function PuntajeTotal($id_precalificacion)
    {
        $precal = precalificacion::where('id', '=', $id_precalificacion)
            ->first();
        $pEdad = $precal->puntajeEdad;
        $pTiempoBimestre = $precal->puntajeTiempoBimestre;
        $pSalarioRegistrado = $precal->puntajeSalarioRegistrado;
        $pSaldoSubcuenta = $precal->puntajeSaldoSubcuenta;
        $pTipoTrabajador = $precal->puntajeTipoTrabajador;

        $ubicacionEmpresa = 142;
        $giroEmpresa = 151;
        $pagosEmpresa = 129;
        $estabilidadEmpresa = 144;

        $puntajeTotal = $pEdad + $pTiempoBimestre + $pSalarioRegistrado + $pSaldoSubcuenta + $pTipoTrabajador + $ubicacionEmpresa + $giroEmpresa + $pagosEmpresa + $estabilidadEmpresa;

        $u = precalificacion::where('id', $id_precalificacion)->update(['puntajeTotal' => $puntajeTotal]);
    }
}
