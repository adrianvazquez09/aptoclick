@extends('layouts.Layout')

@section('title', 'Detalle de Inmueble')

@section('pluginsCss')
<link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
<link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
<link rel="stylesheet" media="screen" href="{{ asset('vendor/flatpickr/dist/flatpickr.min.css') }}"/>
@endsection

@section('contenido')
    <!-- Page content-->
    <!-- Review modal-->
    <div class="modal fade" id="modal-review" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block position-relative border-0 pb-0 px-sm-5 px-4">
                    <h3 class="modal-title mt-4 text-center">Leave a review</h3>
                    <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 px-4">
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label" for="review-name">Name <span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" id="review-name" placeholder="Your name" required>
                            <div class="invalid-feedback">Please let us know your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="review-email">Email <span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="email" id="review-email" placeholder="Your email address"
                                required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="review-rating">Rating <span
                                    class='text-danger'>*</span></label>
                            <select class="form-control form-select" id="review-rating" required>
                                <option value="" selected disabled hidden>Choose rating</option>
                                <option value="5 stars">5 stars</option>
                                <option value="4 stars">4 stars</option>
                                <option value="3 stars">3 stars</option>
                                <option value="2 stars">2 stars</option>
                                <option value="1 star">1 star</option>
                            </select>
                            <div class="invalid-feedback">Please rate the property.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="review-text">Review <span
                                    class='text-danger'>*</span></label>
                            <textarea class="form-control" id="review-text" rows="5" placeholder="Your review message"
                                required></textarea>
                            <div class="invalid-feedback">Please write your review.</div>
                        </div>
                        <button class="btn btn-primary d-block w-100 mb-4" type="submit">Submit a review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header-->
    <input type="hidden" value="{{$inmueble->lat}}" class="lat">
    <input type="hidden" value="{{$inmueble->lng}}" class="lng">
    <section class="container pt-5 mt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('propiedades.venta', 'all') }}">Propiedadades en venta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inmueble ID: {{ $inmueble->id }}</li>
            </ol>
        </nav>
        <h1 class="h2 mb-2">{{ $inmueble->tipo_vivienda }}</h1>
        <p class="mb-2 pb-1 fs-lg">{{ $inmueble->direccion }}</p>
        <!-- Features + Sharing-->
        <div class="d-flex justify-content-between align-items-center">
            <ul class="d-flex mb-4 list-unstyled">
                <li class="me-3 pe-3 border-end">
                    <b class="me-1">{{ $inmueble->recamaras }}</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i>
                </li>
                <li class="me-3 pe-3 border-end">
                    <b class="me-1">{{ $inmueble->baths }}</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i>
                </li>
                @if ($inmueble->estacionamiento == 'SI')
                <li class="me-3 pe-3 border-end">
                    <b class="me-1"></b><i class="fi-car mt-n1 lead align-middle text-muted"></i>
                </li>
                @endif
                <li>
                    <b>{{ $inmueble->m2_construccion }} </b>m<sup>2</sup>
                </li>
            </ul>
        </div>
    </section>
    <!-- Gallery-->
    <section class="container overflow-auto mb-4 pb-3" data-simplebar>
        <div class="row g-2 g-md-3 gallery" data-thumbnails="true" style="min-width: 30rem;">
            <div class="col-8">
                <div id="pano" style="float: left;height: 620px;width: 100%;"></div>
            </div>
            <div class="col-4">
                <div id="satelite"  style="height: 300px; width: 100%;"></div><br>
                <div id="map"       style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </section>
    <!-- Post content-->
    <section class="container mb-5 pb-1">
        <div class="row">
            <div class="col-md-8 mb-md-0 mb-4">
                <h2 class="h3 mb-4 pb-4 border-bottom">${{ number_format($inmueble->precio_sugerido, 2, '.', ',') }} MXN</h2>
                <div class="mb-4 pb-md-3">
                    <h3 class="h4">Detalles de la Propiedad</h3>
                    <ul class="list-unstyled mb-0">
                        <li><b>Tipo: </b>{{ $inmueble->tipo_vivienda }}</li>
                        <li><b>Construcción: </b>{{ $inmueble->m2_construccion }} m<sup>2</sup></li>
                        <li><b>Recamaras: </b>{{ $inmueble->recamaras }}</li>
                        <li><b>Ba&ntilde;os: </b>{{ $inmueble->baths }}</li>
                        <li><b>Estacionamiento: </b>{{ $inmueble->estacionamiento }}</li>
                    </ul>
                </div>
                @include('inmueble.calculadora')
                <div class="mb-4 pb-md-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fi-house-chosen" style="color: #fd5631"></i>&nbsp;&nbsp;Lugares cercanos</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Establecimiento</th>
                                        <th>Distancia</th>
                                    </tr>
                                    </thead>
                                    <tbody id="NombreLugar">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('inmueble.contactoPerfil')
        </div>
    </section>
@endsection

@section('pluginsJs')
<script src="{{ asset('vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js') }}"></script>
<script src="{{ asset('vendor/lg-zoom.js/dist/lg-zoom.min.js') }}"></script>
<script src="{{ asset('vendor/lg-thumbnail.js/dist/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['map_apikey']}}&libraries=places&callback=initialize&v=weekly&channel=2"async></script>
<script src="{{ asset('vendor/cleave.js/dist/cleave.min.js') }}"></script>
<script>
    function initialize() {
        var latitud = $(".lat").val();
        var longitud= $(".lng").val();
        
        const fenway= { 
            lat:parseFloat(latitud), 
            lng: parseFloat(longitud)
        };
        
        const panorama = new google.maps.StreetViewPanorama(
            document.getElementById("pano"),{
                position: fenway,
                pov: {
                    heading: 34,
                    pitch: 10,
                },
            }
        );
        
        var options = {
            center: { lat:parseFloat(latitud), lng: parseFloat(longitud)}, //            
            zoom: 17,
            zoomControl:false,
            mapTypeControl:false,
            scaleControl:false,
            streetViewControl:false,
            overviewMapControl:false,
            rotateControl:true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        var map = new google.maps.Map(document.getElementById("map"), options );

        var marker = new google.maps.Marker({
            position: { lat:parseFloat(latitud), lng: parseFloat(longitud)},
            map:map
        });


        var mapsat = {
            center: { lat:parseFloat(latitud), lng: parseFloat(longitud)}, //            
            zoom: 21,
            zoomControl:false,
            mapTypeControl:false,
            scaleControl:false,
            streetViewControl:false,
            overviewMapControl:false,
            rotateControl:true,
            mapTypeId: google.maps.MapTypeId.SATELLITE 
        } 
        var map = new google.maps.Map(document.getElementById("satelite"), mapsat);

        var markers = new google.maps.Marker({
            position: { lat:parseFloat(latitud), lng: parseFloat(longitud)},
            map:map
        });
        
        var var1 = [];

        var request = {
            location:{ lat:parseFloat(latitud), lng: parseFloat(longitud)},
            radius: 100,
            types: ['food, cafe',"point_of_interest","store","pharmacy"]
        };

        var service = new google.maps.places.PlacesService(map);
        const origin1 = {lat:parseFloat(latitud), lng: parseFloat(longitud)};
        const geocoder = new google.maps.Geocoder();
        const services = new google.maps.DistanceMatrixService();

        service.nearbySearch(request, function(results, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
              var lugares = [];
              var distanc = [];
            for (var i = 1; i < results.length; i++) { 
                distanc.push(results[i].vicinity);                
            }
            const request = {
                    origins:[origin1],
                    destinations: distanc,
                    travelMode: google.maps.TravelMode.WALKING,
                    unitSystem: google.maps.UnitSystem.METRIC,
                    avoidHighways: false,
                    avoidTolls: false,
                };
            
            services.getDistanceMatrix(request).then((response) => {
                for (var i = 0; i<response.rows[0].elements.length; i++){
                    var1.push(response.rows[0].elements[i].distance.text);
                }                
            }).then(()=>{ 
                for (var i = 1; i < results.length; i++) {
                    lugares.push('<tr>' +
                                '<th scope="row">'+[i]+'</th>'+
                                '<td>'+results[i].name + " </td>" +
                                '<td>'+var1[i-1] + '</td>'+
                                '</tr>'
                                );
                    var lugaresN = lugares.toString();
                    var res = lugaresN.replace(/,/g, ".");
                }  
                document.getElementById("NombreLugar").innerHTML = res;        
            });            
          }
        });
    }


</script>

@endsection
@section('customScripts')
    <script src="{{ asset('js/custom/inmuebles/perfil.js') }}"></script>
@endsection