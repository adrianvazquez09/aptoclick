@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('pluginsCss')
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/flatpickr/dist/flatpickr.min.css') }}" />
@endsection

@section('contenido')


    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div id="alertPlace"></div>
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿Qu&eacute; d&iacute;a naciste?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;">Recuerda que para poder aplicar a un crédito debes
                    ser<strong> mayor de edad.</strong></p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row row-cols-sm-auto g-3 align-items-center" action="{{ route('precalificate.paso3', $tp) }}"
                        method="POST">
                        @csrf
                        <div class="col-12">
                            <a class="btn btn-primary" href="{{ route('precalificate.paso2', $tp) }}">Anterior</a>
                        </div>
                        <div class="col-12">
                            @if (empty($fNac))
                                <input class="form-control date-picker rounded pe-5" $date id="fechaNacimiento" type="text"
                                    placeholder="Escoge la fecha" data-datepicker-options='{ "dateFormat": "Y-m-d"}'
                                    name="fechaNacimiento">
                                <input type="hidden" id="age" name="age">
                            @else
                                <input class="form-control date-picker rounded pe-5" $date id="fechaNacimiento" type="text"
                                    placeholder="Escoge la fecha" data-datepicker-options='{ "dateFormat": "Y-m-d"}'
                                    name="fechaNacimiento" value="{{ $fNac }}">
                                <input type="hidden" value="{{ $age }}" id="age" name="age">
                            @endif
                            <input type="hidden" value="{{ $tp }}" name="tokenPrecalificacion" />
                        </div>
                        <div class="col-12" id="btnNext"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pluginsJs')
    <script src="{{ asset('vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/edadesPrecalificacion.js') }}"></script>
@endsection
