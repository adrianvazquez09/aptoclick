<div class="modal fade" id="cost-calculator" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
        <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
                <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-5 border-end-md p-4 p-sm-5">
                        <h4 class="mb-4 mb-sm-5">
                            <i class="fi-house-chosen" style="color: #fd5631;"></i>&nbsp;&nbsp;Caclula tu Cr&eacute;dito</h4>
                        <div id="alertPlace"></div>
                        <form class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold mb-2" for="edad">¿Cu&aacute;ntos a&ntilde;os
                                    tienes?</label>
                                <input class="form-control" type="number" name="edad" id="edad" placeholder="27"
                                    required>
                                <div class="invalid-feedback">Campo obligatorio</div>
                            </div>
                            <div class="pt-2 mb-3">
                                <label class="form-label fw-bold mb-2" for="salario">¿Cu&aacute;nto ganas al
                                    mes?</label>
                                <input class="form-control" type="text" name="salario" id="salario"
                                    placeholder="30,000" required>
                                <div class="invalid-feedback">Campo obligatorio</div>
                            </div>
                            <button class="btn btn-primary d-block w-100 mb-4" type="button" id="calculadora"><i class="fi-calculator me-2"></i>Calcular</button>
                        </form>
                    </div>
                    <div class="col-md-7 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                        <div class="mb-4">
                            <label class="form-label fw-bold mb-2" for="salario">Te podemos prestar:</label>
                            <input class="form-control" type="text" id="montoMaximo" readonly>
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
                                    <label class="form-label fw-bold mb-2" for="salario">Pagar&iacute;as
                                        mensualmente:</label>
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
</div>