$(document).ready(function() {
    var that = this;

    var opt = "";
    var opt = $("#tipoTrabajador option:selected").val();

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            console.log(index);
            $("#step" + index).addClass("active");
        }
    }

    that.steps(8);

    if (opt != 0) {
        $("#btnNext").empty();
        $("#btnNext").append('<button class="btn btn-primary" type="submit"><i class="fi-check"></i>&nbsp;&nbsp;Precalificar</button>');
    } else {
        $("#btnNext").empty();
    }

    $("#tipoTrabajador").change(function(){
        var opt = "";
        var opt = $("#tipoTrabajador option:selected").val();

        if (opt != 0) {
            $("#btnNext").empty();
            $("#btnNext").append('<button class="btn btn-primary" type="submit"><i class="fi-check"></i>&nbsp;&nbsp;Precalificar</button>');
        } else {
            $("#btnNext").empty();
        }

    });

});