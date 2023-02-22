function RequestResponse() {
    var that = this;

    this.RequestResponseGet = function (urlRequest) {
        try {
            var respuesta = '';
            var ajaxF = $.ajax({
                contentType: "application/json; charset=utf-8",
                type: "GET",
                url: urlRequest,
                dataType: 'JSON',
                async: false,
                beforeSend: function () { },
                success: function (response) {
                    respuesta = response;
                }
            });
            return respuesta;
        } catch (e) {
            // return toastr.error('<strong>' + e + '</strong>');
            console.log("error:", e);
        }
    }

    this.RequestResponsePost = function (urlRequest, data) {
        try {
            var dataPost = data;
            var respuesta = '';
            var ajaxF = $.ajax({
                contentType: "application/json; charset=utf-8",
                type: "POST",
                url: urlRequest,
                dataType: 'JSON',
                data: JSON.stringify(dataPost),
                async: false,
                beforeSend: function () { },
                success: function (response) {
                    respuesta = response;
                }
            });
            return respuesta;
        } catch (e) {
            // return toastr.error('<strong>' + e + '</strong>');
            console.log("error:", e);
        }
    }
}