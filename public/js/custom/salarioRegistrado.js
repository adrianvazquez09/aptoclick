$(document).ready(function() {
    var that = this;

    var sr = $("#salarioRegistrado").val();

    var cleaver = new Cleave($("#salarioRegistrado"), {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            console.log(index);
            $("#step" + index).addClass("active");
        }
    }

    that.steps(6);

    this.alert = function (message, type, placeholder) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible fade show" style="margin-top:30px;" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        
        placeholder.append(wrapper);
    }

    this.closeAlert = function () {
        setTimeout(function(){ $('.alert').alert('dispose'); }, 5000);
    }

    if (sr > 0) {
        $("#btnNext").empty();
        $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
    }

    $("#salarioRegistrado").keyup(function(){
        var x = $("#salarioRegistrado").val();
        if (x <= 0) {
            var alertPlaceholder = document.getElementById('alertPlace');
            that.alert('<i class="fi-alert-triange"></i> Recuerda que el salario debe ser <strong>mayor a CERO.</strong>', 'danger', alertPlaceholder);
            that.closeAlert();
            $("#btnNext").empty();
        } else{
            $("#btnNext").empty();
            $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
        }
    });
});