$(document).ready(function() {
    var that = this;

    var sr = $("#sueldo").val();

    var objRequestResponse = new RequestResponse();

    this.Cleaver = function(selector){
        var cleaver = new Cleave(selector, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
    }

    that.Cleaver($("#salario"));

    this.alert = function (message, type, placeholder) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="text-center alert alert-' + type + ' alert-dismissible fade show" style="margin-top:30px;" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        
        placeholder.append(wrapper);
    }

    this.closeAlert = function () {
        setTimeout(function(){ $('#alertPlace').empty(); }, 5000);
    }

    $("#calculator").click(function(){
        $("#cost-calculator").modal('show');
        $("#edad").val('');
        $('#salario').val('');
        $("#montoMaximo").val('');
        $("#tasa").val('');
        $("#mensualidad").val('');
        $("#cat").val('');
        $("#plazo").val('');
    });

    $("#calculadora").click(function(){
        $('#alertPlace').empty();
        var x = $("#salario").val().replace(',', '');
        var y = $("#edad").val();
        var alertPlaceholder = document.getElementById('alertPlace');
        if (y < 18) {
            that.alert('<i class="fi-alert-triange"></i> Recuerda que para poder aplicar a un crédito <strong>debes ser mayor de edad.</strong>', 'danger', alertPlaceholder);
            that.closeAlert();
            $("#edad").val('');
            $('#salario').val('');
            $("#montoMaximo").val('');
            $("#tasa").val('');
            $("#mensualidad").val('');
            $("#cat").val('');
            $("#plazo").val('');
        }else{
            if (x <= 0) {
                that.alert('<i class="fi-alert-triange"></i> Recuerda que el salario debe ser <strong>mayor a CERO.</strong>', 'danger', alertPlaceholder);
                that.closeAlert();
                $("#edad").val('');
                $('#salario').val('');
                $("#montoMaximo").val('');
                $("#tasa").val('');
                $("#mensualidad").val('');
                $("#cat").val('');
                $("#plazo").val('');
            } else{
                var dataPost = {
                    _token: $('input[name=_token]').val(),
                    salario: x
                };
                var r = objRequestResponse.RequestResponsePost('/calculadora/credito', dataPost);
                if (r.mMaximoPesos == 0) {
                    that.alert('<i class="fi-alert-triange"></i> Por favor digita tu salario <strong>en formato de Miles de MXN.</strong>', 'danger', alertPlaceholder);
                    that.closeAlert();
                    $("#edad").val('');
                    $('#salario').val('');
                    $("#montoMaximo").val('');
                    $("#tasa").val('');
                    $("#mensualidad").val('');
                    $("#cat").val('');
                    $("#plazo").val('');
                } else{
                    that.Cleaver($("#montoMaximo"));
                    $("#montoMaximo").val(r.mMaximoPesos + ' MXN');
                    $("#tasa").val(r.tasa + '%');
                    $("#mensualidad").val(r.mensualidad + ' MXN');
                    $("#cat").val(r.cat + '%');
                    $("#plazo").val(r.plazo + ' años');
                }
            }    
        }
    });
});