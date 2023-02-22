<aside class="col-lg-4 col-md-5 ms-lg-auto pb-1">
    <!-- Contact card-->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
                <a class="text-decoration-none" href="#">
                    <i class="rounded-circle h2 fi-home opacity-80" style="color: #fd5631"></i>
                    <h5 class="mb-1">Aptoclick</h5>
                </a>
            </div>
            <ul class="list-unstyled border-bottom mb-4 pb-4">
                <li>
                    <a class="nav-link fw-normal p-0" href="tel:3025550107">
                        <i class="fi-phone mt-n1 me-2 align-middle opacity-60"></i>+52 55 5023 2006
                    </a>
                </li>
                <li>
                    <a class="nav-link fw-normal p-0" href="mailto:floyd_miles@email.com">
                        <i class="fi-mail mt-n1 me-2 align-middle opacity-60"></i>hola@aptoclick.com
                    </a>
                </li>
            </ul>
            <!-- Contact form-->
            <form class="needs-validation" method="POST" action="{{ route('correo.citaContacto') }}">
                @csrf
                <input type="hidden" name="inmueble" value="{{route('propiedades.venta.perfil', $inmueble->id)}}">
                <input type="hidden" name="idInmueble" value="{{ $inmueble->id }}">
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Nombre completo" name="nombres" required>
                    @error("nombres")
                        <div class="invalid-feedback">Campo obligatorio</div>
                    @enderror                  
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" placeholder="Email" name="correo" required>
                    <div class="invalid-feedback">Campo obligatorio</div>
                </div>
                <div class="mb-3">
                    <input class="form-control mb-3" type="tel" placeholder="Teléfono" name="telefono" required>
                    <div class="invalid-feedback">Campo obligatorio</div>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control date-picker rounded pe-5" type="text" placeholder="Escoge una fecha" data-datepicker-options="{&quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;F j, Y&quot;, &quot;dateFormat&quot;: &quot;Y-m-d&quot;}" name="cita" required>
                    <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    <div class="invalid-feedback">Campo obligatorio</div>
                </div>
                <textarea class="form-control mb-3" rows="3" placeholder="Mensaje" style="resize: none;" name="mensaje"></textarea>
                <button class="btn btn-lg btn-primary d-block w-100" type="submit">Agenda tu cita</button>
            </form>
        </div>
    </div>
</aside>