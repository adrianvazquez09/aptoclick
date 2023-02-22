@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')


    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        @include('precalificacion.steps')
        <div id="alertPlace"></div>
        <div class="card" style="margin-top:25px;">
            <div class="card-body">
                <h1 class="card-title text-center">¿C&oacute;mo te llamas?</h1>
                <br>
                <p class="card-text text-center" style="font-size: 18px;">Es importante que <strong>no dejes ning&uacute;n campo vac&iacute;o</strong></p>
                <br>
                <div class="d-flex justify-content-center">
                    <form class="row g-3 align-items-center" id="datosGenerales" action="{{ route('precalificate.paso4', $tp) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="tokenPrecalificacion" value="{{ $tp }}">
                                <input type="hidden" id="fechaNacimiento" value="{{ $fNac }}">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        Nombre(s):
                                    </span>
                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Sara" value="{{ $cliente->nombres }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        Primer apellido
                                    </span>
                                    <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Mendoza" value="{{ $cliente->primerApellido }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        Segundo Apellido
                                    </span>
                                    <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Pineda" value="{{ $cliente->segundoApellido }}">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        N.S.S.
                                    </span>
                                    <input type="text" class="form-control" id="nss" name="nss" placeholder="321654987" value="{{ $cliente->nss }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        R.F.C.
                                    </span>
                                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="XXXX123456XX1" value="{{ $cliente->rfc }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-muted">
                                        C.U.R.P.
                                    </span>
                                    <input type="text" class="form-control" id="curp" name="curp" placeholder="XXXX123456XXXXXX12" value="{{ $cliente->curp }}">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="{{ route('precalificate.paso3', $tp) }}">Anterior</a>
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse" id="btnNext">
                                <button class="btn btn-primary" id="submit" type="submit">Siguiente</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/datosGenerales.js') }}"></script>
@endsection 