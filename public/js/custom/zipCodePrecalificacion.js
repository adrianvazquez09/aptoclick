$(document).ready(function() {
    var that = this;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            $("#step" + index).addClass("active");
        }
    }

    that.steps(2);

    $("#zipCode").keyup(function() {
        var zp = $("#zipCode").val();

        if (zp.length == 5) {
            that.zipCodeEstados(zp);
        }
        else{
            $("#estados").empty();
            $("#municipio").empty();
            $("#colonia").empty();
            $("#btnNext").empty();
            $("#estadosH").val("");
            $("#municipioH").val("");
            $("#coloniaH").val("");
        }
    });

    $("#estados").change(function(){
        var estado = $( "#estados option:selected" ).text();
        var zp = $("#zipCode").val();

        if (zp.length == 5) {
            if(estado != "Selecciona un Estado"){
                $("#municipio").empty();
                $("#colonia").empty();
                $("#btnNext").empty();
                $("#estadosH").val("");
                $("#estadosH").val(estado);
                that.zipCodeMunicipios(zp, estado);
            } else{
                $("#municipio").empty();
                $("#colonia").empty();
                $("#estadosH").val("");
                $("#btnNext").empty();
            }
        }

    });

    $("#municipio").change(function(){
        var municipio = $( "#municipio option:selected" ).text();
        var zp = $("#zipCode").val();

        if (zp.length == 5) {
            if(municipio != "Selecciona un Municipio"){
                $("#colonia").empty();
                $("#btnNext").empty();
                $("#municipioH").val("");
                $("#municipioH").val(municipio);
                that.zipCodeColonias(zp, municipio);
            } else {
                $("#colonia").empty();
                $("#btnNext").empty();
                $("#municipioH").val("");
            }
        }
    });

    $("#colonia").change(function(){
        var colonia = $( "#colonia option:selected" ).text();
        var zp = $("#zipCode").val();

        if (zp.length == 5) {
            if (colonia != "Selecciona una Colonia") {
                $("#coloniaH").val("");
                $("#coloniaH").val(colonia);
                $("#btnNext").empty();
                $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
            }else{
                $("#btnNext").empty();
            }
        }

        
    });

    this.zipCodeEstados = function(zp){
        var dataPost = {
            _token: $('input[name=_token]').val(),
            cp: zp, 
            opt:  0
        }

        var ajaxF = $.ajax({
            contentType: "application/json; charset=utf-8",
            type: "POST",
            url: "../../codigoPostal",
            dataType: 'JSON',
            data: JSON.stringify(dataPost),
            async: false,
            beforeSend: function () { },
            success: function (response) {

                select = document.getElementById('estados');
                var opt0 = document.createElement('option');
                opt0.value = 0;
                opt0.innerHTML = 'Selecciona un Estado';
                select.appendChild(opt0);
                for (var i = 0; i < response.length; i++){
                    var opt = document.createElement('option');
                    opt.value = i;
                    opt.innerHTML = response[i].estado;
                    select.appendChild(opt);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log('getProyectobyClient - ', errorThrown);
                console.log('getProyectobyClient - ', XMLHttpRequest);
            }
        });
    }

    this.zipCodeMunicipios = function(cp, estado){
        var dataPost = {
            _token: $('input[name=_token]').val(),
            cp: cp,
            estado: estado, 
            opt: 1
        }

        var ajaxF = $.ajax({
            contentType: "application/json; charset=utf-8",
            type: "POST",
            url: "../../codigoPostal",
            dataType: 'JSON',
            data: JSON.stringify(dataPost),
            async: false,
            beforeSend: function () { },
            success: function (response) {

                select = document.getElementById('municipio');
                var opt0 = document.createElement('option');
                opt0.value = 0;
                opt0.innerHTML = 'Selecciona un Municipio';
                select.appendChild(opt0);
                for (var i = 0; i < response.length; i++){
                    var opt = document.createElement('option');
                    opt.value = i;
                    opt.innerHTML = response[i].municipio;
                    select.appendChild(opt);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log('getProyectobyClient - ', errorThrown);
                console.log('getProyectobyClient - ', XMLHttpRequest);
            }
        });
    }

    this.zipCodeColonias = function(cp, municipio){
        var dataPost = {
            _token: $('input[name=_token]').val(),
            cp: cp,
            municipio: municipio, 
            opt: 2
        }

        var ajaxF = $.ajax({
            contentType: "application/json; charset=utf-8",
            type: "POST",
            url: "../../codigoPostal",
            dataType: 'JSON',
            data: JSON.stringify(dataPost),
            async: false,
            beforeSend: function () { },
            success: function (response) {
                console.log(response);

                select = document.getElementById('colonia');
                var opt0 = document.createElement('option');
                opt0.value = 0;
                opt0.innerHTML = 'Selecciona una Colonia';
                select.appendChild(opt0);
                for (var i = 0; i < response.length; i++){
                    
                    console.log(response[i], i)
                    
                    var opt = document.createElement('option');
                    opt.value = i;
                    opt.innerHTML = response[i].colonia;
                    select.appendChild(opt);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log('getProyectobyClient - ', errorThrown);
                console.log('getProyectobyClient - ', XMLHttpRequest);
            }
        });
    }
});