<?php

namespace App\Http\Controllers;

use App\Models\inmueble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\inmueble as ModelsInmueble;
use App\Http\Controllers;

class InmuebleController extends Controller
{
    /**Muestra todos los inmuebles */
    public function index($estado){
        
        $einmueble = inmueble::select('estado')->distinct()->orderby('estado', 'asc')->get();
        $inmuebles = inmueble::paginate(12);
        $minPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select min(precio_sugerido) from inmuebles)')->first();
        $maxPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select max(precio_sugerido) from inmuebles)')->first();
        $bathMax = inmueble::select('baths')->whereRaw('baths = (select max(baths) from inmuebles)')->first();
        $roomMax = inmueble::select('recamaras')->whereRaw('recamaras = (select max(recamaras) from inmuebles)')->first();
        $minM2 = inmueble::select('m2_construccion')->whereRaw('m2_construccion = (select min(m2_construccion) from inmuebles)')->first();
        $maxM2 = inmueble::select('m2_construccion')->whereRaw('m2_construccion = (select max(m2_construccion) from inmuebles)')->first();
        //return $einmueble;
        return view('inmueble.venta', ['einmueble' => $einmueble, 'inmuebles' => $inmuebles, 'minPrice' => $minPrice->precio_sugerido, 'maxPrice' => $maxPrice->precio_sugerido,  'bathMax' => $bathMax->baths, 'roomMax' => $roomMax->recamaras, 'minM2' => $minM2->m2_construccion, 'maxM2' => $maxM2->m2_construccion, 'estado' => 'Todos']);
    }

    /**Filtrado en la página de inmuebles */
    public function busquedaFiltros(Request $request) {
        
        $consultas = array();

        if (!empty($request->estado)) {
            if ($request->estado != "Estado") {
                array_push($consultas, "estado = '$request->estado'");
            }
        }
        
        if (!empty($request->municipio)) {
            if ($request->municipio != "Municipio") {
                array_push($consultas, "municipio = '$request->municipio'");
            }
        }

        if (empty($request->minPrice)) {
            array_push($consultas, "precio_sugerido <= $request->maxPrice");
        } else {
            array_push($consultas, "precio_sugerido between $request->minPrice and $request->maxPrice");
        }
    
        if (!empty($request->recamaras)) {
            if ($request->recamaras == 4) {
                array_push($consultas, "recamaras >= 4");
            } else {
                array_push($consultas, "recamaras = $request->recamaras");
            } 
        } 
       
        if (!empty($request->baths)) {
            if ($request->baths == 4) {
                array_push($consultas, "baths >= 4");
            } else {
                array_push($consultas, "baths = $request->baths");
            }
        }

        if (!is_null($request->minM2) && !is_null($request->maxM2)) {
            array_push($consultas, "m2_construccion between $request->minM2 and $request->maxM2");
        } else if (!is_null($request->minM2) && is_null($request->maxM2)) {
            array_push($consultas, "m2_construccion = $request->minM2");
        } else if (!is_null($request->maxM2) && is_null($request->minM2)) {
            array_push($consultas, "m2_construccion = $request->maxM2");
        }

        if (!empty($request->parking)) {
            array_push($consultas, "estacionamiento like 'SI'");
        }

        if(!empty($request->tipo_vivienda)) {
            array_push($consultas, "tipo_vivienda = '$request->tipo_vivienda'");
        }

        $consulta = implode(" and ", $consultas);
        $filtro = inmueble::whereRaw($consulta)->paginate(12);
        $einmueble = inmueble::select('estado')->distinct()->orderby('estado', 'asc')->get();
        $minPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select min(precio_sugerido) from inmuebles)')->first();
        $maxPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select max(precio_sugerido) from inmuebles)')->first();
        $bathMax = inmueble::select('baths')->whereRaw('baths = (select max(baths) from inmuebles)')->first();
        $roomMax = inmueble::select('recamaras')->whereRaw('recamaras = (select max(recamaras) from inmuebles)')->first();
        $minM2 = inmueble::select('m2_construccion')->whereRaw('m2_construccion = (select min(m2_construccion) from inmuebles)')->first();
        $maxM2 = inmueble::select('m2_construccion')->whereRaw('m2_construccion = (select max(m2_construccion) from inmuebles)')->first();
        
        // return $consulta;
        return view('inmueble.venta', ['einmueble' => $einmueble, 'inmuebles' => $filtro, 'minPrice' => $minPrice->precio_sugerido, 'maxPrice' => $maxPrice->precio_sugerido,  'bathMax' => $bathMax->baths, 'roomMax' => $roomMax->recamaras, 'minM2' => $minM2->m2_construccion, 'maxM2' => $maxM2->m2_construccion, 'estado' => $request->estado]);
    }

    public function mapMarker(){
        $locations = ModelsInmueble::all();
        $map_markes = array ();
        foreach ($locations as $key => $location) { 
            $map_markes[] = (object)array(
                'id' => $location->id,
                'estado' => $location->estado,
                'municipio' => $location->municipio,
                'lat' => $location->lat,
                'lng' => $location->lng,
            );
        }
        return response()->json($map_markes);
    }

    /**Busqueda de municipios por estado */
    public function municipios(Request $request){
        
        $m = inmueble::select('municipio')->distinct()->where('estado', '=', $request->estado)->orderBy('municipio', 'asc')->get();
        
        return $m;
    }

    /**Perfil del inmueble */
    public function profileInmueble($idInmueble){

        $inmueble = inmueble::where('id', $idInmueble)->first();

        // return $inmueble;
        return view('inmueble.perfil', ['inmueble' => $inmueble]);
    }
}
