<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
@guest
<a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" id="InicioSesion">
    <i class="fi-user me-2"></i>Inicia Sesi&oacute;n
</a>
<a class="btn btn-primary btn-sm ms-2 order-lg-3" id="InicioPreca">
    <i class="fi-plus me-2" id="precalificateButton" data-perfil-id="1"></i>Precalificate<span class='d-none d-sm-inline'></span>
</a>
@else
<div class="dropdown d-none d-lg-block order-lg-3 my-n2 me-3"><a class="d-block py-2" href="{{ route('profile.user', Auth::user()->id) }}">
    <img class="rounded-circle" src="{{ Auth::user()->avatar }}" width="40" alt="{{ Auth::user()->name }}"></a>
    <div class="dropdown-menu dropdown-menu-end">
        <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem;"><img class="rounded-circle" src="{{ Auth::user()->avatar }}" width="48" alt="{{ Auth::user()->name }}">
            <div class="ps-2">
                <h6 class="fs-base mb-0">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <a class="dropdown-item" href="{{ route('inicio') }}"><i class="fi-home opacity-60 me-2"></i>Home</a>
        <a class="dropdown-item" href="{{ route('profile.user', Auth::user()->id) }}"><i class="fi-user opacity-60 me-2"></i>Informaci&oacute;n Personal</a>
        <a class="dropdown-item" href="#"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </div>
</div>
<a class="btn btn-primary btn-sm ms-2 order-lg-3" href="{{ route('precalificate.paso1', 0) }}">
    <i class="fi-plus me-2" id="precalificateButton" data-perfil-id="1"></i>Precalificate<span class='d-none d-sm-inline'></span>
</a>
@endguest
<div class="collapse navbar-collapse order-lg-2" id="navbarNav">
    <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button">Buscar Propiedades</a>
            <!-- <a class="nav-link" href="{{ route('propiedades.venta', 'all') }}" role="button">Buscar Propiedades</a> -->
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('manifesto') }}" role="button">Manifesto Aptoclick</a>
        </li>
        @guest
        <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Inicia Sesi&oacute;n</a></li>
        @else
        <li class="nav-item dropdown d-lg-none"><a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle" src="{{ Auth::user()->avatar }}" width="40" alt="{{ Auth::user()->name }}">&nbsp;&nbsp;{{ Auth::user()->name }}</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('inicio') }}"><i class="fi-home opacity-60 me-2"></i>Home</a>
                <a class="dropdown-item" href="{{ route('profile.user', Auth::user()->id) }}"><i class="fi-user opacity-60 me-2"></i>Informaci&oacute;n Personal</a>
                <a class="dropdown-item" href="#"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div>
        </li>
        @endguest
    </ul>
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $( document ).ready(function() {
        $("#InicioSesion").click(function(){
            $("#signin-modal").modal('show');
            $("#Inemail").val('');
            $("#Inpassword").val('');
        });
        $("#InicioPreca").click(function(){
            $("#signin-modal").modal('show');
            $("#Inemail").val('');
            $("#Inpassword").val('');
        });
    });
</script>
