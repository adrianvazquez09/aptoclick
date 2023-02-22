@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')
    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿C&oacute;mo es la relaci&oacute;n con tu actual trabajo?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;">¿Qu&eacute; tipo de contrato tienes?</p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row row-cols-sm-auto g-3 align-items-center"
                        action="{{ route('precalificate.paso8', $tp) }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <a class="btn btn-primary" href="{{ route('precalificate.paso7', $tp) }}">Anterior</a>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">
                            <select class="form-select" id="tipoTrabajador" name="tipoTrabajador">
                                @if ($opt != 0)
                                    <option value="0">Selecciona una opción</option>
                                @else
                                    <option value="0" selected>Selecciona una opción</option>
                                @endif
                                @foreach ($tt as $item)
                                    @if ($opt == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->descripcion }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endif
                                @endforeach
                            </select>
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

@section('customScripts')
    <script src="{{ asset('js/custom/tipoTrabajador.js') }}"></script>
@endsection
