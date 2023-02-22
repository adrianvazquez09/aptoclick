@extends('layouts.Layout')

@section('title', 'Manifesto')

@section('contenido')
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row justify-content-center">
          <!-- Page content-->
            <div class="col-md-9">
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manifesto Aptoclick</li>
              </ol>
            </nav>
            <!-- Title-->
            <div class="mb-4">
              <h1 class="h2 mb-0 text-center">Manifesto Aptoclick</h1>
            </div>
            <!-- Basic info-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
              {{-- <h2 class="h4 mb-4">Basic info</h2> --}}
                <p style="text-align: justify;">
                    Somos un grupo de jóvenes que tomó la decisión de lanzar Aptoclick para resolver un problema grande: que la población pueda hacerse de una vivienda propia, segura y cómoda sin realizar inversiones millonarias.
                    <br><br>
                    La problemática surge cuando nos dimos cuenta que 9 de cada 10 mexicanos quiere comprar una casa, pero el 45 por ciento de la población no tiene el recurso suficiente.
                    <br><br>
                    Con los sueldos de hoy día pareciera imposible, pero ahí es donde entra nuestro equipo de especialistas, ya que básicamente nosotros rescatamos inmuebles, los regularizamos de acuerdo con las normatividades de cada estado, legalizamos y ponemos a disposición de los usuarios.
                    <br><br>
                    El hacerse de una casa no es una decisión fácil y por eso te prestamos el enganche o cubrimos la diferencia del valor total del inmueble y luego lo terminas comprando con tu crédito infonavit.
                    <br><br>
                    Entendemos que el invertir en un patrimonio es una inversión para toda la vida, por lo que te “blindamos legalmente”.  Nosotros revisamos atentamente todos los expedientes del inmueble, regularizamos la carta catastral para evitar este tipo de problemas.
                    <br><br>
                    Aptoclick es una compañía con tecnología y moderna que quiere solventar el rezago en la vivienda en México. Nos dedicamos a la compra de casas seminuevas, las remodelamos y entregamos domicilios totalmente impecables.
                    <br><br>
                    Nuestros esfuerzos están enfocados en cambiar la forma en la cual te puedes hacer de una casa propia, segura y cómoda. Consultas un catálogo de casas remodeladas, vemos las opciones de financiamiento que hay disponibles según tu caso particular y si no te alcanza, nosotros te ayudamos.
                    <br><br>
                    Nosotros estamos listos para darte las llaves de tu nuevo patrimonio, y tú ¿estás listo para que vivamos juntos?
                </p>
            </section>
          </div>
        </div>
      </div>
@endsection