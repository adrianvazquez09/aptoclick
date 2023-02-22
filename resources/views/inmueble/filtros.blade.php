<aside class="col-lg-4 col-xl-3 border-top-lg border-end-lg shadow-sm px-3 px-xl-4 px-xxl-5 pt-lg-2">
    <form action="{{ route('propiedades.venta', 'filters') }}" method="POST">
        <div class="offcanvas offcanvas-start offcanvas-collapse" id="filters-sidebar">
            <div class="offcanvas-header d-flex d-lg-none align-items-center">
                <h2 class="h5 mb-0">Filtros</h2>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-header d-block border-bottom pt-0 pt-lg-4 px-lg-0">
                <ul class="nav nav-tabs mb-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="real-estate-catalog-sale.html">
                            <i class="fi-home fs-base me-2"></i>En venta
                        </a>
                    </li>
                </ul>
            </div>
            @csrf
            <div class="offcanvas-body py-lg-4">
                <div class="pb-4 mb-2">
                    <h3 class="h6">Ubicaci&oacute;n</h3>
                    <select class="form-select mb-2" name="estado" id="estado">
                        <option value="Estado">Estado</option>
                        @foreach ($einmueble as $estado)
                            <option value="{{ $estado->estado }}">{{ $estado->estado }}</option>
                        @endforeach
                    </select>
                    <select class="form-select" name="municipio" id="municipio"></select>
                </div>
                <div class="pb-4 mb-2">
                    <h3 class="h6">Precio</h3>
                    <div class="range-slider" data-start-min="{{ $minPrice }}" data-start-max="{{ $maxPrice / 2 }}" data-min="{{ $minPrice }}" data-max="{{ $maxPrice }}" data-step="50000">
                        <div class="range-slider-ui"></div>
                        <div class="d-flex align-items-center">
                            <div class="w-50 pe-2">
                                <input class="form-control range-slider-value-min" name="minPrice" id="minPrice" type="text" readonly>
                            </div>
                            <div class="text-muted">&mdash;</div>
                            <div class="w-50 ps-2">
                                <input class="form-control range-slider-value-max" name="maxPrice" id="maxPrice" type="text" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-4 mb-2">
                    <h3 class="h6 pt-1">Recamaras &amp; ba&ntilde;os</h3>
                    <label class="d-block fs-sm mb-1">Recamaras</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                        @for ($i = 1; $i <= $roomMax; $i++)
                            @if ($i == 4)
                                <input class="btn-check" type="radio" id="bedrooms-{{ $i }}" name="recamaras" value="{{ $i }}">
                                <label class="btn btn-outline-secondary fw-normal" value="{{ $i }}" for="bedrooms-{{ $i }}">{{ $i }}+</label>
                            @break
                        @else
                            <input class="btn-check" type="radio" id="bedrooms-{{ $i }}" name="recamaras" value="{{ $i }}">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-{{ $i }}">{{ $i }}</label>
                        @endif
                        @endfor
                    </div>
                    <label class="d-block fs-sm pt-2 my-1">Ba&ntilde;os</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                        @for ($i = 1; $i <= $bathMax; $i++)
                            @if ($i == 4)
                                <input class="btn-check" type="radio" id="bathrooms-{{ $i }}" name="baths" value="{{ $i }}">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-{{ $i }}">{{ $i }}+</label>
                            @break
                        @else
                            <input class="btn-check" type="radio" id="bathrooms-{{ $i }}" name="baths" value="{{ $i }}">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-{{ $i }}">{{ $i }}</label>
                        @endif
                        @endfor
                    </div>
                </div>
                <div class="pb-4 mb-2">
                    <h3 class="h6 pt-1">Metros cuadrados</h3>
                    <div class="d-flex align-items-center">
                        <input class="form-control w-100" type="number" name="minM2" id="minM2" min="{{ $minM2 }}" max="{{ $maxM2 }}" placeholder="Min">
                        <div class="mx-2">&mdash;</div>
                        <input class="form-control w-100" type="number" name="maxM2" id="maxM2" min="{{ $minM2 }}" max="{{ $maxM2 }}" placeholder="Max">
                    </div>
                </div>
                <div class="pb-4 mb-2">
                    <h3 class="h6">Amenidades</h3>
                    <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 2rem;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="parking" id="parking">
                            <label class="form-check-label fs-sm" for="parking">Estacionamiento</label>
                        </div>
                    </div>
                </div>
                <div class="border-top py-4">
                    <div class="pb-4 mb-2">
                        <button class="btn btn-primary" type="submit"><i class="fi-search me-2"></i>Buscar
                            Propiedad</button>
                        <button class="btn btn-outline-primary" type="button" style="margin-top: 15px;"><i
                                class="fi-rotate-right me-2"></i>Limpiar filtros</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</aside>