<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\LegalesController;
use App\Http\Controllers\PrecalificacionController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileUserController;
use App\Models\inmueble;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    $estados = inmueble::select('estado')->distinct()->orderby('estado', 'asc')->get();
    $tipos = inmueble::select('tipo_vivienda')->distinct()->orderby('tipo_vivienda', 'asc')->get();
    $minPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select min(precio_sugerido) from inmuebles)')->first();
    $maxPrice = inmueble::select('precio_sugerido')->whereRaw('precio_sugerido = (select max(precio_sugerido) from inmuebles)')->first();
    return view('welcome', ['estados' => $estados, 'tipos' => $tipos, 'minPrice' => $minPrice, 'maxPrice' => $maxPrice]);
})->name('inicio');

Route::get('login/{provider}', [App\Http\Controllers\ProviderController::class, 'redirectToProvider'])->name('social.auth');
Route::get('login/{provider}/callback', [App\Http\Controllers\ProviderController::class, 'handleProviderCallback'])->name('social.callback');

Route::post('logins/{provider}', [App\Http\Controllers\ProviderController::class, 'registro'])->name('social.register');
Route::post('loginn/{provider}', [App\Http\Controllers\ProviderController::class, 'entrar'])->name('social.entrar');

Route::get('precalificate/paso1/{tp}', [PrecalificacionController::class, 'presupuestoInmueble'])->middleware('auth')->name('precalificate.paso1');
Route::get('precalificate/paso2/{tp}', [PrecalificacionController::class, 'lugarVivienda'])->middleware('auth')->name('precalificate.paso2');
Route::get('precalificate/paso3/{tp}', [PrecalificacionController::class, 'edad'])->middleware('auth')->name('precalificate.paso3');
Route::get('precalificate/paso4/{tp}', [PrecalificacionController::class, 'datosGenerales'])->middleware('auth')->name('precalificate.paso4');
Route::get('precalificate/paso5/{tp}', [PrecalificacionController::class, 'bimestresTrabajo'])->middleware('auth')->name('precalificate.paso5');
Route::get('precalificate/paso6/{tp}', [PrecalificacionController::class, 'salarioRegistrado'])->middleware('auth')->name('precalificate.paso6');
Route::get('precalificate/paso7/{tp}', [PrecalificacionController::class, 'saldoSubcuenta'])->middleware('auth')->name('precalificate.paso7');
Route::get('precalificate/paso8/{tp}', [PrecalificacionController::class, 'tipoTrabajador'])->middleware('auth')->name('precalificate.paso8');


Route::post('precalificate/paso1/{tp}', [PrecalificacionController::class, 'presupuestoInmuebleSave'])->middleware('auth')->name('precalificate.paso1');
Route::post('precalificate/paso2/{tp}', [PrecalificacionController::class, 'lugarViviendaSave'])->middleware('auth')->name('precalificate.paso2');
Route::post('precalificate/paso3/{tp}', [PrecalificacionController::class, 'edadSave'])->name('precalificate.paso3');
Route::post('precalificate/paso4/{tp}', [PrecalificacionController::class, 'datosGeneralesSave'])->middleware('auth')->name('precalificate.paso4');
Route::post('precalificate/paso5/{tp}', [PrecalificacionController::class, 'bimestresTrabajoSave'])->name('precalificate.paso5');
Route::post('precalificate/paso6/{tp}', [PrecalificacionController::class, 'salarioRegistradoSave'])->name('precalificate.paso6');
Route::post('precalificate/paso7/{tp}', [PrecalificacionController::class, 'saldoSubcuentaSave'])->name('precalificate.paso7');
Route::post('precalificate/paso8/{tp}', [PrecalificacionController::class, 'tipoTrabajadorSave'])->name('precalificate.paso8');

Route::get('precalificate/notificacion/{tp}', [PrecalificacionController::class, 'notificacionScore'])->middleware('auth')->name('precalificate.score');
Route::post('codigoPostal', [PrecalificacionController::class, 'sepomex']);

Route::get('profile/user/{id}', [ProfileUserController::class, 'index'])->middleware('auth')->name('profile.user');
Route::put('profile/user/{id}', [ProfileUserController::class, 'update'])->middleware('auth')->name('profile.update');


Route::get('propiedades/venta/{estado}', [InmuebleController::class, 'index'])->name('propiedades.venta');
Route::post('propiedades/venta/{estado}', [InmuebleController::class, 'busquedaFiltros'])->name('propiedades.venta');
Route::post('municipio/venta', [InmuebleController::class, 'municipios'])->name('propiedades.venta.municipios');

Route::get('propiedades/venta/perfil/{idInmueble}', [InmuebleController::class, 'profileInmueble'])->name('propiedades.venta.perfil');
Route::post('calculadora/credito', [CalculadoraController::class, 'calculadoraHome'])->name('calculadora.home');

Route::get('manifesto', [LegalesController::class, 'Manifesto'])->name('manifesto');
Route::get('faqs', [LegalesController::class, 'faqs'])->name('faqs');
Route::get('AvisoPrivacidad', [LegalesController::class, 'AvisoPrivacidad'])->name('AvisoPrivacidad');
Route::get('TerminosCondiciones', [LegalesController::class, 'TerminosCondiciones'])->name('TerminosCondiciones');

Route::post('calculadora/perfil/inmueble', [CalculadoraController::class, 'calculadoraPerfilInmueble'])->name('calculadora.inmueble');
Route::post('contacto', [ContactoController::class, 'EnviarCorreoCita'])->name('correo.citaContacto');

Route::get('/agentes-inmobiliarios', function () {
    return view('agentes-inmobiliarios');
})->name('agentes-inmobiliarios');


Route::get('/proximamente', function () {
    return view('proximamente');
})->name('proximamente');


Route::get('/club-de-inversionistas', function () {
    return view('club-de-inversionistas');
});