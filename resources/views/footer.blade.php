<footer class="footer bg-secondary pt-5">
    <div class="container pt-lg-4 pb-4">
        <!-- Links-->
        <div class="row mb-5 pb-md-3 pb-lg-4">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="d-flex flex-sm-row flex-column justify-content-between mx-n2">
                    <div class="mb-sm-0 mb-4 px-2">
                        <a class="navbar-brand d-inline-block mb-4" style="font-family: kollektif" href="/">
                            <span class="display-6" style="color: #fd5631">aptoclick</span>
                        </a>
                        <ul class="nav flex-column mb-sm-4 mb-2">
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal"
                                    href="mailto:example@email.com"><i
                                        class="fi-mail mt-n1 me-2 align-middle opacity-70"></i>hola@aptoclick.com</a>
                            </li>
                            <li class="nav-item"><a class="nav-link p-0 fw-normal" href="tel:4065550120">
                                <i class="fi-device-mobile mt-n1 me-2 align-middle opacity-70"></i>+52 561 473 4058</a></li>
                        </ul>
                        <div class="pt-2"><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2"
                                href="#"><i class="fi-facebook"></i></a><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2"
                                href="#"><i class="fi-twitter"></i></a><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2"
                                href="#"><i class="fi-viber"></i></a><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2"
                                href="#"><i class="fi-telegram"></i></a></div>
                    </div>
                    <div class="mb-sm-0 mb-4 px-2">
                        <h4 class="h5">Aptoclick</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('manifesto') }}">Manifesto Aptoclick</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('propiedades.venta', 'all') }}">Buscar Propiedades</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('agentes-inmobiliarios') }}">Agentes Inmobiliarios</a></li>
                            @guest    
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="#signin-modal" data-bs-toggle="modal">¡Precalificate ya!</a></li>
                            @else
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('precalificate.paso1', 0) }}">¡Precalificate ya!</a></li>
                            @endguest
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('faqs') }}">Preguntas frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="px-2">
                        <h4 class="h5">Legal</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('TerminosCondiciones') }}">T&eacute;rminos y condiciones</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal" href="{{ route('AvisoPrivacidad') }}">Aviso de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>           
        </div>
        <!-- Banner-->
        
        <div class="text-center fs-sm pt-4 mt-3 pb-2"><a href='{{ route('inicio') }}' class='d-inline-block nav-link p-0' rel='noopener'>&copy; <span style="font-family: kollektif;color:#fd5631;" class="fs-lg">aptoclick</span> {{date('Y')}}</a></div>
    </div>
</footer>