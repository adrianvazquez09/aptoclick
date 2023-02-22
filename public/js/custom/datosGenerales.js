$(document).ready(function() {
    var that = this;

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            $("#step" + index).addClass("active");
        }
    }

    that.steps(4);

    this.alert = function (message, type, placeholder) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible fade show" style="margin-top:30px;" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        
        placeholder.append(wrapper);
    }

    this.closeAlert = function () {
        setTimeout(function(){ $('.alert').alert('dispose'); }, 5000);
    }

    if ($("#rfc").val().trim() == "") {
        var rfc = $("#primerApellido").val().substring(0,2).toUpperCase() + $("#segundoApellido").val().substring(0,1).toUpperCase() + $("#nombres").val().substring(0,1).toUpperCase() + $("#fechaNacimiento").val()
        $("#rfc").val("");
        $("#rfc").val(rfc);
    }

    if ($("#curp").val().trim() == "") {
        $("#curp").val("");
        $("#curp").val(rfc);
    }

    $("#datosGenerales").submit(function(){
        var rfcl = $("#rfc").val().length;
        var curp = $("#curp").val().length;
        if (rfcl > 13 || rfcl < 10) {
            var alertPlaceholder = document.getElementById('alertPlace');
            that.alert('<i class="fi-alert-triange"></i> Por favor revisa tu <strong>R.F.C.</strong>', 'danger', alertPlaceholder);
            that.closeAlert();
            return false;
        }
        if (curp < 18 || curp > 18) {
            var alertPlaceholder = document.getElementById('alertPlace');
            that.alert('<i class="fi-alert-triange"></i> Por favor revisa tu <strong>C.U.R.P.</strong>', 'danger', alertPlaceholder);
            that.closeAlert();
            return false;
        }
    });

});