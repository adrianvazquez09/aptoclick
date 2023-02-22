@extends('layouts.Layout')

@section('pluginsCss')
  <link rel="stylesheet" href="{{ asset('vendor/leaflet/dist/leaflet.css') }}">
@endsection

@section('title', 'Propiedades en venta')

@section('contenido')
<div class="container-fluid mt-5 pt-5 p-0">
  <div class="row g-0 mt-n3">
    <!-- Filters sidebar (Offcanvas on mobile)-->
    @include('inmueble.filtros')
    <!-- Page content-->
    <div class="col-lg-8 col-xl-9 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
      <!-- Map popup-->
      <div class="map-popup invisible" id="map">
        <button class="btn btn-icon btn-light btn-sm shadow-sm rounded-circle" type="button" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-x fs-xs"></i></button>
        <div class="mapita" id="mapa"></div>
      </div>

      <!-- Breadcrumb-->
      <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Propiedadades en venta</li>
          @if ($estado == "Estado")
          <li class="breadcrumb-item active" aria-current="page">Todos</li>
          @else
          <li class="breadcrumb-item active" aria-current="page">{{ $estado }}</li>
          @endif
        </ol>
      </nav>

      <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
        <h1 class="h2 mb-sm-0">Propiedades en venta</h1>
        <a class="d-inline-block fw-bold text-decoration-none py-1" href="#" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-map me-2"></i>Ver mapa</a>
      </div>
      <!-- Catalog grid-->
      <div class="row g-4 py-4">
        @foreach ($inmuebles as $inmueble)
        <input type="hidden" value="{{$inmueble->lat}}" class="latitud">
        <input type="hidden" value="{{$inmueble->lng}}" class="longitud">
        <input type="hidden" value="{{number_format($inmueble->precio_sugerido)}}.00 MXN" class="precio">
        <input type="hidden" value="{{$inmueble->tipo_vivienda}}" class="tipo">
        <input type="hidden" value="{{$inmueble->id}}" class="idInmueble">
        <input type="hidden" value="{{$inmueble->baths}}" class="baths">
        <input type="hidden" value="{{$inmueble->recamaras}}" class="recamaras">
        <input type="hidden" value="{{$inmueble->estacionamiento}}" class="estacionamiento">
        <input type="hidden" value="{{$inmueble->direccion}}" class="dir">
        <input type="hidden" value="{{$inmueble->m2_construccion}}" class="m2">
        
        <div class="col-sm-6 col-xl-4">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="{{ route('propiedades.venta.perfil', $inmueble->id) }}"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"></div>
              <div class="tns-carousel-inner">
                <img src="https://maps.googleapis.com/maps/api/streetview?size=300x150&key={{config('googlemap')['map_apikey']}}&location={{ $inmueble->lat }},{{ $inmueble->lng }}" alt="Image">
              </div>
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary"></h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{ route('propiedades.venta.perfil', $inmueble->id) }}">{{ $inmueble->tipo_vivienda }} | {{ $inmueble->m2_construccion }} m<sup>2</sup></a></h3>
              <p class="mb-2 fs-sm text-muted">{{ $inmueble->direccion }}</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>${{ number_format($inmueble->precio_sugerido) }}.00 MXN</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">{{ $inmueble->recamaras }}<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{ $inmueble->baths }}<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span>
            @if ($inmueble->estacionamiento == "SI")
              <span class="d-inline-block mx-1 px-2 fs-sm"><i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
            @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="border-top pb-md-4 pt-4 mt-2">
        {{ $inmuebles->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

@section('filtros')
  <button class="btn btn-primary btn-sm w-100 rounded-0 fixed-bottom d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#filters-sidebar"><i class="fi-filter me-2"></i>Filtros</button>
@endsection

@section('pluginsJs')
  <script src="{{ asset('vendor/leaflet/dist/leaflet.js') }}"></script>
@endsection


@section('customScripts')
  <script src="{{ asset('js/custom/inmuebles/buscador.js') }}"></script>
  <script>
    $(document).ready(function(){

      var objBuscador = new Buscador();
      objBuscador.filtrado();
      objBuscador.initMap("{{ route('propiedades.venta.perfil', 0) }}");
    });
  </script>
@endsection