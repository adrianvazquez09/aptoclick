$(document).ready(function() {
    var that = this;

    var opt = "";
    var opt = $("#tiempoBimestre option:selected").val();

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            console.log(index);
            $("#step" + index).addClass("active");
        }
    }

    this.steps = function(stepNumber){
        for (let index = 1; index <= stepNumber; index++) {
            console.log(index);
            $("#step" + index).addClass("active");
        }
    }

    that.steps(5);

    if (opt != 0) {
        $("#btnNext").empty();
        $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
    } else {
        $("#btnNext").empty();
    }

    $("#tiempoBimestre").change(function(){
        var opt = "";
        var opt = $("#tiempoBimestre option:selected").val();

        if (opt != 0) {
            $("#btnNext").empty();
            $("#btnNext").append('<button class="btn btn-primary" type="submit">Siguiente</button>');
        } else {
            $("#btnNext").empty();
        }

    });

});