@extends('layouts.Layout')

@section('contenido')
@include('precalificacion.calculadora')
<!-- Hero-->
<section class="container pt-5 my-5 pb-lg-4">
  <div class="row pt-0 pt-md-2 pt-lg-0">
    <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3"><img src="{{ asset('img/principal_amarillo.png') }}" alt="Hero image"></div>
    <div class="col-xl-5 col-lg-6 col-md-7 order-md-1 pt-xl-5 pe-lg-0 mb-3 text-md-start text-center">
      <h1 class="display-4 mt-lg-5 mb-md-4 mb-3 pt-md-4 pb-lg-2">Casas seminuevas <br> al alcance de todos</h1>
      <p class="position-relative lead me-lg-n5">Cambiamos la forma en la cual te puedes hacer de una casa propia, segura y con los precios más bajos. Compramos casas seminuevas, las remodelamos y entregamos domicilios impecables, para que la habites de manera inmediata y te hagas de un patrimonio propio. </p>
    </div>

  </div>
</section>
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="row gy-4">
      <div class="col-md-5 col-12"><img class="d-block mx-auto" src="{{ asset('img/real-estate/illustrations/find.svg') }}"
              alt="Illustration"></div>
      <div class="col-lg-6 offset-lg-1 col-md-7 col-12">
          <h2 class="h3 mb-lg-5 mb-sm-4">C&oacute;mo funciona</h2>
          <div class="steps steps-vertical">
              <div class="step active">
                  <div class="step-progress"><span class="step-number">1</span></div>
                  <div class="step-label ms-4">
                      <h3 class="h5 mb-2 pb-1">Visita nuestro sitio</h3>
                      <p class="mb-0">El primer paso para conseguir un inmueble con nosotros es visitar el sitio de Aptoclick.com y ver el cat&aacute;logo de casas que tenemos al alcance de tu mano. Hay domicilios de todos los tipos y estamos seguros que hay alguno que se ajustar&aacute; a tu gusto.</p>
                  </div>
              </div>
              <div class="step active">
                  <div class="step-progress"><span class="step-number">2</span></div>
                  <div class="step-label ms-4">
                      <h3 class="h5 mb-2 pb-1">Reserva tan pronto puedas</h3>
                      <p class="mb-0">Nuestro catálogo está en constante actualización por los inmuebles que incorporamos, por lo que te recomendamos reservar tu nueva casa tan pronto puedas y comiences. Estaremos disponibles todo el tiempo para consultar la opción de financiamiento que mejor te convenga, además, recuerda que recibimos créditos de Infonavit, Fovissste e hipotecarios de instituciones bancarias.</p>
                  </div>
              </div>
              <div class="step active">
                  <div class="step-progress"><span class="step-number">3</span></div>
                  <div class="step-label ms-4">
                      <h3 class="h5 mb-2 pb-1">Regularización al momento</h3>
                      <p class="mb-0">Una vez reservado comienza la regularización. Todos los detalles de propiedad y escrituración comienzan al momento de que formulas tu solicitud y son transparentados hasta que habites tu nuevo hogar en un periodo de 3 A 6 meses como máximo. Estamos seguros que el tiempo estará de nuestro lado. Muy pronto vamos a tener propiedades de entrega inmediata</p>
                  </div>
              </div>
              <div class="step active">
                  <div class="step-progress"><span class="step-number">4</span></div>
                  <div class="step-label ms-4">
                      <h3 class="h5 mb-2 pb-1">Casas seguras y con garantia</h3>
                      <p class="mb-0">Las casas recuperadas de Aptoclick son entregadas con una garantía única en el mercado de viviendas recuperadas, te ofrecemos la certeza de que la casa que te sea entregada será segura y en condiciones óptimas interna y externamente.</p>
                  </div>
              </div>
              <div class="step active">
                  <div class="step-progress"><span class="step-number">5</span></div>
                  <div class="step-label ms-4">
                      <h3 class="h5 mb-2 pb-1">Vivamos juntos</h3>
                      <p class="mb-0">El objetivo de Aptoclick es el de democratizar la vivienda y lo hacemos a través de casas seminuevas. Hay más certeza de que son casas bellas, listas para ser habitadas y que darán tranquilidad a ti o a tu familia sobre su nueva propiedad.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Property cost calculator-->
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="row align-items-center">
    <div class="col-md-5"><img class="d-block mx-md-0 mx-auto mb-md-0 mb-4" src="img/real-estate/illustrations/calculator.svg" width="416" alt="Illustration"></div>
    <div class="col-xxl-6 col-md-7 text-md-start text-center">
      <h2>Simulador Crédito infonavit</h2>
      <p class="pb-3 fs-lg">Te presentamos nuestra calculadora que te podrá ayudar a conocer las opciones que tienes en atención a tu situación financiera. Además, siempre podemos auxiliarte con alguno de nuestros asesores.</p><a class="btn btn-lg btn-primary" id="calculator"><i class="fi-calculator me-2"></i>Calcular</a>
    </div>
  </div>
</section>
<section class="container mb-5 pb-2 pb-lg-4">
  <h2 class="h3 mb-4 text-center text-md-start">Aptoclick en los medios</h2>
  <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
    <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 5, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 24}}}">
      <div>
        <a class="swap-image" href="#">
          <img class="swap-to" src="{{ asset('img/medios/milenio.png') }}" alt="Logo" width="196">
          <img class="swap-from" src="{{ asset('img/medios/milenio.png') }}" alt="Logo" width="196">
        </a>
      </div>
      <div>
        <a class="swap-image" href="#" style="margin-top: 45px;">
          <img class="swap-to" src="{{ asset('img/medios/expansion.svg') }}" alt="Logo" width="196">
          <img class="swap-from" src="{{ asset('img/medios/expansion.svg') }}" alt="Logo" width="196">
        </a>
      </div>
      <div>
        <a class="swap-image" href="#" style="margin-top: 45px;">
          <img class="swap-to" src="{{ asset('img/medios/solMexico.svg') }}" alt="Logo" width="196">
          <img class="swap-from" src="{{ asset('img/medios/solMexico.svg') }}" alt="Logo" width="196">
        </a>
      </div>
      <div>
        <a class="swap-image" href="#" style="margin-top: 35px;">
          <img class="swap-to" src="{{ asset('img/medios/entrepreneur.svg') }}" alt="Logo" width="300">
          <img class="swap-from" src="{{ asset('img/medios/entrepreneur.svg') }}" alt="Logo" width="300">
        </a>
      </div>
      <div>
        <a class="swap-image" href="#" style="margin-top: 25px;">
          <img class="swap-to" src="{{ asset('img/medios/centroUrbano.svg') }}" alt="Logo" width="300">
          <img class="swap-from" src="{{ asset('img/medios/centroUrbano.svg') }}" alt="Logo" width="300">
        </a>
      </div>
    </div>
  </div>
</section>

@include('wp1')

@endsection

@section('pluginsJs')
    <script src="{{ asset('vendor/cleave.js/dist/cleave.min.js') }}"></script>    
@endsection

@section('customScripts')
    <script src="{{ asset('js/custom/RequestResponse.js') }}"></script>
    <script src="{{ asset('js/custom/calculadora.js') }}"></script>
@endsection