@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')
    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div id="alertPlace"></div>
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿Cu&aacute;nto es lo que ganas al mes?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;">Por favor selecciona la opci&oacute;n
                    correspondiente a tu salario registrado en tu trabajo.</p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row row-cols-sm-auto g-3 align-items-center"
                        action="{{ route('precalificate.paso6', $tp) }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <a class="btn btn-primary" href="{{ route('precalificate.paso5', $tp) }}">Anterior</a>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">

                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-muted">
                                    $
                                </span>
                                <input type="text" class="form-control" id="salarioRegistrado" name="salarioRegistrado" placeholder="0.00" value="{{ $sr }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-12" id="btnNext"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pluginsJs')
    <script src="{{ asset('vendor/cleave.js/dist/cleave.min.js') }}"></script>    
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/salarioRegistrado.js') }}"></script>
@endsection
