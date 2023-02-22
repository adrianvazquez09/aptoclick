@extends('layouts.Layout')

@section('contenido')
<!-- Page content-->
<div class="container mt-5 mb-md-4 pt-5">

</div>
<!-- Page header-->
<section class="container mb-5 pb-2">
  <div class="row align-items-center justify-content-center">
    <!-- Hero content-->
    <div class="col-lg-7 col-md-5 col-sm-9 order-md-1 order-2 text-md-start text-center">
      <h1 class="mb-4">Invierte en remates inmobiliarios</h1>
      <p class="mb-4 pb-3 fs-lg">Obtén inmuebles con hasta 60% menos de su valor comercial y adquiere hasta el 30% de utilidad anual sobre la inversión inicial.</p>
      <div>
        <button class="btn btn-lg btn-primary" data-tf-popup="ja4J43Uw" data-tf-iframe-props="title=Registration Form" data-tf-medium="snippet">Quiero Invertir</button><script src="//embed.typeform.com/next/embed.js"></script>
      </div>
    </div>
    <!-- Hero carousel-->
    <div class="col-lg-4 col-md-4 offset-md-1 col-12 order-md-2 order-1">
      <div class="tns-carousel-wrapper tns-controls-static tns-nav-outside text-center">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: true, &quot;gutter&quot;: 16}">
          <div><img class="rounded-3" width="100%" height="100%" src="{{ asset('img/inversionistas/inv-img1.png') }}" alt="Carousel image"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Titulo-->
<section class="container mb-5 pb-2 pb-lg-4 text-center">
  <h2>¿Cómo funciona?</h2>
</section>

<!-- How it works-->
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="border-0 shadow">
  <!-- Carouel linked to external controls -->
    <div class="tns-carousel-wrapper">
      <div class="tns-carousel-inner" data-carousel-options='{"controlsContainer": "#external-controls", "nav": false, "gutter": 20}'>

        <!-- Item -->
        <div class="text-center ps-1">
          <blockquote>
            <br>
            <div class="step active">
              <div class="step-progress"><span class="step-number">1</span></div>
            </div>
            <br>
            <p>Seleccionamos las mejores oportunidades de remates bancarios con descuento hasta 60%</p>
          </blockquote>
        </div>

        <!-- Item -->
        <div class="text-center ps-1">
          <blockquote>
            <br>
            <div class="step active">
              <div class="step-progress"><span class="step-number">2</span></div>
            </div>
            <br>
            <p>Aptoclick se engarca te todo el proceso de legalización, desalojo, escrituración</p>
          </blockquote>
        </div>

        <!-- Item -->
        <div class="text-center ps-1">
          <blockquote>
            <br>
            <div class="step active">
              <div class="step-progress"><span class="step-number">3</span></div>
            </div>
            <br>
            <p>Aptoclick rehabilita el inmueble y lo pone a la venta a través de red de brokers</p>
          </blockquote>
        </div>

        <!-- Item -->
        <div class="text-center ps-1">
          <blockquote>
            <br>
            <div class="step active">
              <div class="step-progress"><span class="step-number">4</span></div>
            </div>
            <br>
            <p>Repartimos las ganancias y aseguramos retornos superiores al 16% anual</p>
          </blockquote>
        </div>

      </div>
    </div>

    <br>

    <!-- External controls (prev/next buttons) -->
    <div class="tns-carousel-controls justify-content-center" id="external-controls">
      <button type="button" class="mx-2">
        <i class="fi-chevron-left"></i>
      </button>
      <button type="button" class="mx-2">
        <i class="fi-chevron-right"></i>
      </button>
    </div>

  <br> 
  </div>
  
</section>

<!-- Titulo-->
<section class="container mb-5 pb-2 pb-lg-4 text-center">
  <h2>Porqué invertir en nuestros remates</h2>
</section>


<!-- How it works-->
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="row gy-4">
    <div class="col-sm-6 col-12 d-flex align-items-stretch">
      <div class="card border-0 shadow">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Te ofrecemos un crédito para comprar</h5>
          <p class="card-text fs-sm">¿No cuentas con el dinero para comprar de contado? No te preocupes, nosotros te los prestamos</p>
          <div class="mt-auto text-center">
            <button class="btn btn-sm btn-primary" data-tf-popup="ja4J43Uw" data-tf-iframe-props="title=Registration Form" data-tf-medium="snippet">Quiero Invertir</button><script src="//embed.typeform.com/next/embed.js"></script>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-12 d-flex align-items-stretch">
      <div class="card bg-secondary">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Descubre nuevas oportunidades exclusivas</h5>
          <p class="card-text fs-sm">Acceda a propiedades que no encontrarán en ningún otro lugar. Los propietarios de viviendas venden exclusivamente en nuestro mercado, lo que significa menos competencia para usted.</p>
          <div class="mt-auto text-center">
            <button class="btn btn-sm btn-primary" data-tf-popup="ja4J43Uw" data-tf-iframe-props="title=Registration Form" data-tf-medium="snippet">Quiero Invertir</button><script src="//embed.typeform.com/next/embed.js"></script>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-12 d-flex align-items-stretch">
      <div class="card border-0 shadow">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Ver información en un solo lugar</h5>
          <p class="card-text fs-sm">Aptoclick proporciona información clave para ayudarlo a encontrar la mejor oportunidad.</p>
          <p class="card-text fs-sm">Los detalles de la propiedad pueden incluir: Fotos del interior y exterior de la propiedad, Recorridos en 3D, planos de planta, expedientes legales vivienda e informes de títulos</p>
          <div class="mt-auto text-center">
            <button class="btn btn-sm btn-primary" data-tf-popup="ja4J43Uw" data-tf-iframe-props="title=Registration Form" data-tf-medium="snippet">Quiero Invertir</button><script src="//embed.typeform.com/next/embed.js"></script>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-12 d-flex align-items-stretch">
      <div class="card bg-secondary">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Nos encargamos de todo el proceso</h5>
          <p class="card-text fs-sm">¡Déspreocupate! nos encargamos te todo el proceso legal, desalojo yremodelacion y venta final</p>
          <div class="mt-auto text-center">
            <button class="btn btn-sm btn-primary" data-tf-popup="ja4J43Uw" data-tf-iframe-props="title=Registration Form" data-tf-medium="snippet">Quiero Invertir</button><script src="//embed.typeform.com/next/embed.js"></script>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection