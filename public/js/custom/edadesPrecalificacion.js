$(document).ready(function(){
    var that = this;

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            console.log(index);
            $("#step" + index).addClass("active");
        }
    }

    that.steps(3);

    this.alert = function (message, type, placeholder) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible fade show" style="margin-top:30px;" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        
        placeholder.append(wrapper)
    }

    this.closeAlert = function () {
        setTimeout(function(){ $('.alert').alert('close'); }, 2500);
    }

    this.stepBack = function () {
        var edadAtras = $("#age").val();
        if ($("#age").val()) {
            $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
        } else{
            $("#btnNext").empty();
        }
    }

    that.stepBack();

    $("#fechaNacimiento").change(function(){
        var fnac = new Date($("#fechaNacimiento").val());
        var d = new Date();
        var dif = d.getFullYear() - fnac.getFullYear();
        
        if (dif < 18) {
            var alertPlaceholder = document.getElementById('alertPlace');
            that.alert('<i class="fi-alert-triange"></i> Recuerda que para poder aplicar a un crédito <strong>debes ser mayor de edad.</strong>', 'danger', alertPlaceholder);
            $("#age").val('');
            $("#btnNext").empty();
            that.closeAlert();
        } else {
            $("#age").val('');
            $("#age").val(dif);
            $("#btnNext").empty();
            $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
        }
        
    });
});