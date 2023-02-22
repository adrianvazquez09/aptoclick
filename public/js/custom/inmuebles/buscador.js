function Buscador(){
    var that = this;

    var objRequestResponse = new RequestResponse();

    this.cleanMunicipio = function (selector) {
        $("#municipio").empty();
        var opt1 = document.createElement('option');
        opt1.value = "Municipio";
        opt1.innerHTML = "Municipio";
        selector.appendChild(opt1);
    };

    this.filtrado = function () {
        var select = document.getElementById('municipio');
        var opt0 = document.createElement('option');
        opt0.value = "Municipio";
        opt0.innerHTML = 'Municipio';
        select.appendChild(opt0);

        $("#estado").change(function () {
            var estado = $("#estado").val();
            if (estado != "Estado") {
                var dataPost = {
                    _token: $('input[name=_token]').val(),
                    estado: estado
                }
                var r = objRequestResponse.RequestResponsePost('/municipio/venta', dataPost);
                that.cleanMunicipio(select);
                for (var i = 0; i < r.length; i++) {
                    var opt = document.createElement('option');
                    opt.value = r[i].municipio;
                    opt.innerHTML = r[i].municipio;
                    select.appendChild(opt);
                }
            }
        });
    }

    this.initMap = function (rutaPerfil) {
        var latitud = [];
        var longitud = [];
        var idInmueble = [];
        var m2 = [];
        var tipo = [];
        var dir = [];
        var baths = [];
        var recamaras = [];
        var estacionamiento = [];
        var precio = [];
        var rp = rutaPerfil.substring(0, rutaPerfil.length - 1);

        $(".latitud").each(function () {
            latitud.push($(this).val());
        });

        $(".longitud").each(function () {
            longitud.push($(this).val());
        });

        $(".m2").each(function(){
            m2.push($(this).val());
        });

        $(".idInmueble").each(function(){
            idInmueble.push($(this).val());
        });

        $(".tipo").each(function(){
            tipo.push($(this).val());
        });

        $(".baths").each(function(){
            baths.push($(this).val());
        });

        $(".recamaras").each(function(){
            recamaras.push($(this).val());
        });

        $(".estacionamiento").each(function(){
            estacionamiento.push($(this).val());
        });

        $(".precio").each(function(){
            precio.push($(this).val());
        });

        $(".dir").each(function(){
            dir.push($(this).val());
        });

        var map = L.map('mapa').setView([19.40670718977293, -99.16026747557818], 5);
        L.tileLayer('https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=tCvpD2NTQPpKJfo2u4bd', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a> <a href="https://www.maptiler.com/copyright/ ">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright ">&copy; OpenStreetMap contributors</a>'
        }).addTo(map);

        var iconito = L.icon({
            iconUrl: '../../img/map/marker-icon.png',
            iconSize: [25, 39],
            iconAnchor: [12, 39],
            shadowUrl: '../../img/map/marker-shadow.png',
            shadowSize: [41, 41],
            shadowAnchor: [13, 41],
            popupAnchor: [1, -28],
            className: "custom-marker-dot"
        });

        for (var i =0; i<latitud.length; i++){
            var est = "";
            
            if (estacionamiento[i] == "SI") {
                est = "<span class='d-inline-block px-2 fs-sm'><i class='fi-car ms-1 fs-base text-muted'></i></span>";
            } else {
                est = "";
            }

            var popup = "<a href='" + rp + idInmueble[i] + "' class='d-block'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>En venta</h4><h3 class='h6 mb-1 fs-sm'><a href='" + rp + idInmueble[i] + "' class='nav-link stretched-link'>" + tipo[i] + " | " + m2[i] + " m<sup>2</sup></a></h3><p class='mt-0 mb-2 fs-xs text-muted'>" + dir[i] + "</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$" + precio[i] + "</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>" + recamaras[i] + "<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>" + baths[i] + "<i class='fi-bath ms-1 fs-base text-muted'></i></span>" + est + "</div>";

            var marker = L.marker([latitud[i], longitud[i]], {icon:iconito}).addTo(map);
            marker.bindPopup(popup);
        }
    }
}