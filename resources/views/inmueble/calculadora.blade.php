<div class="mb-4 pb-md-3">
    <div class="card border-0 shadow">
        <div class="card-body">
            <h4 class="card-title"><i class="fi-calculator" style="color: #fd5631"></i>&nbsp;&nbsp;C&aacute;lcula tu cr&eacute;dito</h4>
            <div class="row mx-0 align-items-center">
                <div class="col-md-5 border-end-md">
                    {{-- <h4 class="card-title"><i class="fi-calculator" style="color: #fd5631"></i>&nbsp;&nbsp;C&aacute;lcula tu cr&eacute;dito</h4> --}}
                    <div id="alertPlace"></div>
                    <form class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold mb-2" for="edad">¿Cu&aacute;ntos a&ntilde;os tienes?</label>
                            <input class="form-control" type="number" name="edad" id="edad" placeholder="27" required>
                            <div class="invalid-feedback">Campo obligatorio</div>
                        </div>
                        <div class="pt-2 mb-3">
                            <label class="form-label fw-bold mb-2" for="salario">¿Cu&aacute;nto ganas al mes?</label>
                            <input class="form-control" type="text" name="salario" id="salario" placeholder="30,000" required>
                            <div class="invalid-feedback">Campo obligatorio</div>
                        </div>
                        <input type="hidden" name="valorInmueble" id="vInmueble" value="{{ number_format($inmueble->precio_sugerido, 2, '.', '') }}">
                        <button class="btn btn-primary d-block w-100 mb-4" type="button" id="calculadora"><i class="fi-calculator me-2"></i>Calcular</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="mb-4">
                        <label class="form-label fw-bold mb-2" for="salario">Costo del Inmueble:</label>
                        <input class="form-control" type="text" id="montoMaximo" value="$ {{ number_format($inmueble->precio_sugerido, 2, '.', ',') }} MXN" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-2" for="salario">Tasa:</label>
                                <input class="form-control" type="text" id="tasa" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-2" for="salario">Pagar&iacute;as mensualmente:</label>
                                <input class="form-control" type="text" id="mensualidad" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-2" for="salario">CAT:</label>
                                <input class="form-control" type="text" id="cat" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-2" for="salario">Plazo:</label>
                                <input class="form-control" type="text" id="plazo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mt-sm-5">NI: CAT indicativo cuyo cálculo es no informativo para el acreditado, dados los parámetros particulares del crédito</div>
                </div>
            </div>
        </div>
    </div>
</div>