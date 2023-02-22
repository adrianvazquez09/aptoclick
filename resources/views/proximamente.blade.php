@extends('layouts.Layout')

@section('contenido')
<!-- Page content-->
<div class="container mt-5 mb-md-4 pt-5">

</div>
<!-- Page header-->
<section class="container mb-5 pb-2">
  <div class="row align-items-center justify-content-center">
    <!-- Hero content-->
    <div class="col-lg-7 col-md-8 col-sm-14 order-md-1 order-2 text-md-start text-center">
      <h1 class="mb-4">Proximamente</h1>
      <p class="mb-4 pb-3 fs-lg">Pronto podrás ser tú quien cierre el negocio, Aptoclick te asesorará y te ayudará a cumplirá el rol de ‘‘propietario’’ en la transacción.</p>
      <div class = "text-center">
        <button class="btn btn-lg btn-primary">Volver</button>
      </div>
    </div>
    <!-- Hero carousel-->
    <div class="col-lg-4 col-md-1 offset-md-1 col-12 order-md-2 order-1">
      <div class="tns-carousel-wrapper tns-controls-static tns-nav-outside text-center">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: true, &quot;gutter&quot;: 16}">
          <div><img class="rounded-3" width="90%" height="90%" src="{{ asset('img/inmobiliario/img1.jpg') }}" alt="Carousel image"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@endsection