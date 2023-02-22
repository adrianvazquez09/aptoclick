@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')
    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿Cu&aacute;nto tienes en tu subcuenta de Infonavit?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;"></p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row row-cols-sm-auto g-3 align-items-center"
                        action="{{ route('precalificate.paso7', $tp) }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <a class="btn btn-primary" href="{{ route('precalificate.paso6', $tp) }}">Anterior</a>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">
                            <select class="form-select" id="saldoSubcuenta" name="saldoSubcuenta">
                                @if ($opt != 0)
                                    <option value="0">Selecciona una opción</option>
                                @else
                                    <option value="0" selected>Selecciona una opción</option>
                                @endif
                                @foreach ($ss as $item)
                                    @if ($opt == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->rango }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->rango }}</option>
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
    <script src="{{ asset('js/custom/saldoSubcuenta.js') }}"></script>
@endsection
