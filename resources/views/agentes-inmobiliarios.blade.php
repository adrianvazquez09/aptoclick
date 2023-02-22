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
      <h1 class="mb-4">Haz negocios con nuestros apartamentos en venta y llévate el 4.5% de comisión</h1>
      <p class="mb-4 pb-3 fs-lg">Tú serás quien cierre el negocio, Aptoclick te asesorará y cumplirá el rol de ‘‘propietario’’ en la transacción.</p>
      <div class = "text-center">
        <button class="btn btn-lg btn-primary" data-tf-popup="AJkAJYKD" data-tf-iframe-props="title=Aliados Aptoclick" data-tf-medium="snippet">Quiero saber más</button><script src="//embed.typeform.com/next/embed.js"></script>
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
<!-- How it works-->
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="row gy-4">
    <div class="col-md-5 col-12"><img class="rounded-3 d-block mx-auto" width="80%" height="80%" src="{{ asset('img/inmobiliario/img2.jpg') }}" alt="Illustration"></div>
    <div class="col-lg-6 offset-lg-1 col-md-7 col-12">
      <h2 class="h3 mb-lg-5 mb-sm-4">Conoce los beneficios de vender apartamentos como los nuestros:</h2>
      <p class="mb-lg-5">Un inmueble Aptoclick dura en promedio 2 meses en venta, su calidad, ubicación y estado, hace que los clientes se enamoren de ellos muy rápido.</p>
      <div class="steps steps-vertical">
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">No compartes comisión</h3>
            <p class="mb-0">Te pagamos el 100%, ya que somos los propietarios del inmueble.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">4.5% y más</h3>
            <p class="mb-0">No solo te llevas la comisión, también acumulas puntos y ganas premios.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">El cliente es tuyo</h3>
            <p class="mb-0">Garantizamos la exclusividad de tu cliente.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">Amplias tu portafolio</h3>
            <p class="mb-0">Inmuebles libres de gravámenes y listos para vivir en ellos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why choose us?-->
<section class="container mb-2 mb-xl-5 pb-lg-4">
  <!-- Features carousel-->
  <div class="tns-carousel-wrapper tns-nav-outside">
    <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: false, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 24}}}">
      <!-- Feature slide-->
      <div>
        <div class="card border-0">
          <div class="card-body">
            <div class="icon-box text center">
              <div class="icon-box-media mb-3 mx-auto">
                <i class = "fi-man h1"></i>
              </div>
            </div>
            <h3 class="h5 card-title pb-1">1. Te conviertes en aliado inmobiliario Aptoclick</h3>
            <p class="card-text">Solo debes registrarte y contarnos que quieres vender nuestros apartamentos.</p>
          </div>
        </div>
      </div>
      <!-- Feature slide-->
      <div>
        <div class="card border-0">
          <div class="card-body">
            <div class="icon-box text center">
              <div class="icon-box-media mb-3 mx-auto">
                <i class = "fi-eye-on h1"></i>
              </div>
            </div>
            <h3 class="h5 card-title pb-1">2. Empiezas a mostrar los apartamentos</h3>
            <p class="card-text">Puedes agendar visitas con tus clientes 24/7. Te enviaremos periódicamente las actualizaciones de los apartamentos en venta recién listados.</p>
          </div>
        </div>
      </div>
      <!-- Feature slide-->
      <div>
        <div class="card border-0">
          <div class="card-body">
            <div class="icon-box text center">
              <div class="icon-box-media mb-3 mx-auto">
                <i class = "fi-real-estate-buy h1"></i>
              </div>
            </div>
            <h3 class="h5 card-title pb-1">3. Recibes tu comisión en 3 días.</h3>
            <p class="card-text">Obtienes el pago 3 días después de la escritura, ya que los apartamentos Aptoclick se venden y son entregados a sus futuros dueños muy rápido.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Botón-->
<section class="container mb-5 pb-2 pb-lg-4 text-center">
   <button class="btn btn-lg btn-primary" data-tf-popup="AJkAJYKD" data-tf-iframe-props="title=Aliados Aptoclick" data-tf-medium="snippet">Quiero conocer más el proceso</button><script src="//embed.typeform.com/next/embed.js"></script>
</section>

<!-- Titulo-->
<section class="container mb-5 pb-2 pb-lg-4 text-center">
  <h2>Te ofrecemos las herramientas más eficaz para cerrar tus ventas</h2>
</section>


<!-- How it works-->
<section class="container mb-5 pb-2 pb-lg-4">
  <div class="row gy-4">
    <div class="col-md-5 col-12"><img class="rounded-3 d-block mx-auto" src="{{ asset('img/inmobiliario/img3.jpg') }}" alt="Illustration"></div>
    <div class="col-lg-6 offset-lg-1 col-md-7 col-12">
      <p class="mb-lg-5">Desarrollamos diversas herramientas de mercadeo para que puedas vender más rápido nuestros apartamentos.</p>
      <div class="steps steps-vertical">
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">Ficha descriptiva</h3>
            <p class="mb-0"> Te entregamos todas las características del inmueble en una ficha que puedes compartir en redes y Whatsapp.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">Fotos en alta calidad</h3>
            <p class="mb-0">Cada apartamento cuenta con fotografías profesionales, nosotros nos encargamos de tomarlas por ti.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">Recorridos 360</h3>
            <p class="mb-0">Con este material interactivo acercamos a tus clientes de manera virtual a la realidad y a las dimensiones del apartamento.</p>
          </div>
        </div>
        <div class="step active">
          <div class="step-progress"><span class="step-number"></span></div>
          <div class="step-label ms-4">
            <h3 class="h5 mb-2 pb-1">Estudio de inmueble</h3>
            <p class="mb-0">La forma más rápida de saber todo de una propiedad, podrás conocer desde el valor comercial hasta el número de hogares con bicicleta en el barrio.</p>
          </div>
        </div>
        <div class = "text-center">
           <button class="btn btn-lg btn-primary" data-tf-popup="AJkAJYKD" data-tf-iframe-props="title=Aliados Aptoclick" data-tf-medium="snippet">Quiero saber más</button><script src="//embed.typeform.com/next/embed.js"></script>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection