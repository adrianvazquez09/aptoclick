@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')


    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div id="alertPlace"></div>
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿Quieres estrenar casa?</h1>
                <h4 class="card-title text-center">Inicia hoy tu proceso. Es f&aacute;cil y r&aacute;pido</h4>
                <br><br>
                <h3 class="card-title text-center">¿C&uacute;al es tu presupuesto?</h3>
                <br>
                <p class="card-text text-center" style="font-size: 18px;"></p>
                <div class="d-flex justify-content-center">
                    <form class="row row-cols-sm-auto g-3 align-items-center" action="{{ route('precalificate.paso1', $tp) }}"
                        method="POST">
                        @csrf
                        <div class="col-12">
                            <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">
                            <select class="form-select" id="presupuestoInmueble" name="presupuestoInmueble">
                                @if ($opt != 0)
                                    <option value="0">Selecciona una opción</option>
                                @else
                                    <option value="0" selected>Selecciona una opción</option>
                                @endif
                                @foreach ($pi as $item)
                                    @if ($opt == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->rango }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->rango }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12" id="btnNext"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/presupuestoInmueble.js') }}"></script>
@endsection