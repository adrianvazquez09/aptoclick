@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')


    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div id="alertPlace"></div>
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿Dond&eacute; te gustar&iacute;a vivir?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;">Ingresa por favor el <strong>c&oacute;digo
                        postal</strong> de la zona que es de tu interes</p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row g-3 align-items-center" action="{{ route('precalificate.paso2', $tp) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">
                                <div class="input-group">
                                    <span class="input-group-text text-muted">
                                        C.P.
                                    </span>
                                    <input type="number" class="form-control" id="zipCode" name="zipCode" placeholder="03800" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="estados"></select>
                                <input type="hidden" name="estados" id="estadosH">
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-md-6">
                                    <select class="form-select" id="municipio"></select>
                                    <input type="hidden" name="municipio" id="municipioH">
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" id="colonia"></select>
                                    <input type="hidden" name="colonia" id="coloniaH">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="{{ route('precalificate.paso1', $tp) }}">Anterior</a>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse" id="btnNext"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/zipCodePrecalificacion.js') }}"></script>
@endsection
