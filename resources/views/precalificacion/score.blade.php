@extends('layouts.Layout')

@section('title', 'Precalificación')

@section('contenido')
    <section class="container pt-5 my-5 pb-lg-4">

        <!-- Inline steps: Default -->
        <div class="steps">
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">1</span>
                </div>
                <div class="step-label">Presupuesto</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">2</span>
                </div>
                <div class="step-label">¿Dond&eacute; quieres vivir?</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">3</span>
                </div>
                <div class="step-label">Datos personales</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">4</span>
                </div>
                <div class="step-label">Edad</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">5</span>
                </div>
                <div class="step-label">Tiempo laborando</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">6</span>
                </div>
                <div class="step-label">Ingresos</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">7</span>
                </div>
                <div class="step-label">Subcuenta Infonavit</div>
            </div>
            <div class="step active">
                <div class="step-progress">
                    <span class="step-progress-start"></span>
                    <span class="step-progress-end"></span>
                    <span class="step-number">8</span>
                </div>
                <div class="step-label">Estado actual de Trabajo</div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 70px;">
            <div class="mb-4 col-md-6 col-sm-12">
                <div class="card shadow">
                    <div class="card-body"><img class="d-block mx-auto mt-2 mb-4" src="{{asset('img/pricing/icon-3.svg') }}"
                            width="72" alt="Icon">
                        <h2 class="h5 fw-normal text-center py-1 mb-0">{{ $tituloNotificacion }}</h2>
                        <div class="d-flex align-items-end justify-content-center mb-4">
                            <div class="h1 mb-0">{{$tituloStatus}}</div>
                        </div>
                        <ul class="list-unstyled d-block mb-0 mx-auto" style="max-width: 16rem;">
                            <li class="d-flex"><i class="fi-check text-primary fs-sm mt-1 me-2"></i><span>Tu puntaje fue: {{ $tituloPuntaje }} puntos</span></li>
                            @if ($tituloPrestamoInfonavit > 0)
                                <li class="d-flex"><i class="fi-check text-primary fs-sm mt-1 me-2"></i><span>Tu pr&eacute;stamo Infonavit es aproximadamente de: <strong>${{ number_format($tituloPrestamoInfonavit, 2) }}</strong></span></li>
                            @else
                                <li class="d-flex"><i class="fi-x text-primary fs-sm mt-1 me-2"></i><span>Por el momento Infonavit no te puede ofrecer un pr&eacute;stamo</span></li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-footer py-2 border-0">
                        <div class="border-top text-center pt-4 pb-3"><a class="btn btn-primary" href="{{ route('profile.user', Auth::user()->id) }}">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/score.js') }}"></script>
@endsection
