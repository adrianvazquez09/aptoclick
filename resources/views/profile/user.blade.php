@extends('layouts.Layout')

@section('title', 'Perfíl del cliente')

@section('pluginsCss')
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/filepond/dist/filepond.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/flatpickr/dist/flatpickr.min.css') }}" />
@endsection

@section('contenido')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Home</a></li>
                <li class="breadcrumb-item"><a>Cuenta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informaci&oacute;n Personal</li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
                <!-- Account nav-->
                <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
                    <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
                        <img class="rounded-circle" src="{{ Auth::user()->avatar }}" width="48" alt="Annette Black">
                        <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                            <h2 class="fs-lg mb-0">{{ Auth::user()->name }}</h2>
                            <ul class="list-unstyled fs-sm mt-3 mb-0">
                                <li><a class="nav-link fw-normal p-0"><i class="fi-phone opacity-60 me-2"></i></a></li>
                                <li><a class="nav-link fw-normal p-0"><i class="fi-mail opacity-60 me-2"></i>{{ Auth::user()->email }}</a></li>
                            </ul>
                        </div>
                    </div><a class="btn btn-primary btn-lg w-100 mb-3" href="{{ route('precalificate.paso1', 0) }}"><i
                            class="fi-plus me-2"></i>Precalificate</a><a
                        class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav"
                        data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
                    <div class="collapse d-md-block mt-3" id="account-nav">
                        <div class="card-nav">
                            <a class="card-nav-link active" href="real-estate-account-info.html">
                                <i class="fi-user opacity-60 me-2"></i>Informaci&oacute;n Personal
                            </a>
                            <a class="card-nav-link" href="real-estate-account-wishlist.html">
                                <i class="fi-heart opacity-60 me-2"></i>Wishlist
                            </a>
                            <a class="card-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fi-logout opacity-60 me-2"></i>Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5">
                <h1 class="h2">Informaci&oacute;n Personal</h1>                
                {{-- <label class="form-label pt-2" for="account-bio">Short bio</label>
                <div class="row pb-2">
                    <div class="col-lg-9 col-sm-8 mb-4">
                        <textarea class="form-control" id="account-bio" rows="6"
                            placeholder="Write your bio here. It will be displayed on your public profile."></textarea>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4">
                        <input class="file-uploader bg-secondary" type="file" accept="image/png, image/jpeg"
                            data-label-idle="&lt;i class=&quot;d-inline-block fi-camera-plus fs-2 text-muted mb-2&quot;&gt;&lt;/i&gt;&lt;br&gt;&lt;span class=&quot;fw-bold&quot;&gt;Change picture&lt;/span&gt;"
                            data-style-panel-layout="compact" data-image-preview-height="160"
                            data-image-crop-aspect-ratio="1:1" data-image-resize-target-width="200"
                            data-image-resize-target-height="200">
                    </div>
                </div> --}}
                <div class="border rounded-3 p-3 mb-4" id="personal-info">
                            
                    <form action="{{route('profile.update',$c)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Nombre(s)</label>
                                    <input class="form-control mt-3" id="nombre" name="nombre" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->nombres }}">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Primer apellido</label>
                                    <input class="form-control mt-3" id="apPat" name="apPat" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->primerApellido }}">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Segundo apellido</label>
                                    <input class="form-control mt-3" id="apMat" name="apMat" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->segundoApellido }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Fecha de nacimiento</label>
                                    <input class="form-control date-picker rounded pe-5" $date id="fechaNacimiento" name="fechaNacimiento" type="text"
                                    placeholder="Escoge la fecha" data-datepicker-options='{ "dateFormat": "Y-m-d"}'
                                    name="fechaNacimiento" value={{ $c->fechaNacimiento }}>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">N&uacute;mero de Seguridad Social (NSS)</label>
                                    <input class="form-control rounded pe-5" id="nss" name="nss" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->nss }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Registro Federal de Contribuyente (RFC)</label>
                                    <input class="form-control mt-3" id="rfc" name="rfc" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->rfc }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="border-bottom pb-3 mb-3">
                                    <label class="form-label fw-bold">Clave Unica de Registro de Pobalci&oacute;n (CURP)</label>
                                    <input class="form-control mt-3" id="curp" name="curp" type="text" data-bs-binded-element="#name-value"
                                        data-bs-unset-value="Not specified" value="{{ $c->curp }}">
                                </div>
                            </div>
                        </div>                        
                        <div class="row">                            
                            <div class="col-md-4 mb-4"><img src="{{ Storage::url($c->doc_curp) }}"></div>
                            <div class="col-md-4 mb-4"><img src="{{ Storage::url($c->doc_rfc) }}"></div>
                            <div class="col-md-4 mb-4"><img src="{{ Storage::url($c->doc_nss) }}"></div>
                        </div>
                        <div class="row">                            
                            <div class="col-md-4 mb-4">
                                <!--<input type="file" name="doc_curp">-->
                                <label class="custom-file-upload btn btn-primary mb-3">
                                    <input type="file" class="file-uploader-grid" id="doc_curp" name="doc_curp">
                                    <i class="fi-cloud-upload me-1 "></i>CURP
                                </label>
                                <!--<input class="file-uploader file-uploader-grid" type="file" id="doc_curp" name="doc_curp"
                                       data-label-idle='
                                        <div class="btn btn-primary mb-3">
                                            <i class="fi-cloud-upload me-1"></i>CURP
                                        </div>
                                '>-->
                            </div>                    
                            <div class="col-md-4 mb-4">
                                <label class="custom-file-upload btn btn-primary mb-3">
                                    <input type="file" class="file-uploader-grid" id="doc_rfc" name="doc_rfc">
                                    <i class="fi-cloud-upload me-1 "></i>RFC
                                </label>
                                <!--<input type="file" name="doc_rfc" >-->
                                <!--<input class="file-uploader file-uploader-grid" type="file" id="doc_rfc" name="doc_rfc"
                                       multiple data-max-files="4" data-max-file-size="2MB" 
                                       accept="image/png, image/jpeg, video/mp4, video/mov" 
                                       data-label-idle='
                                        <div class="btn btn-primary mb-3">
                                            <i class="fi-cloud-upload me-1"></i>RFC
                                        </div>
                                '>-->
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="custom-file-upload btn btn-primary mb-3">
                                    <input type="file" class="file-uploader-grid" id="doc_nss" name="doc_nss">
                                    <i class="fi-cloud-upload me-1 "></i>NSS
                                </label>
                                <!--<input type="file" name="doc_nss">-->
                                <!--<input class="file-uploader file-uploader-grid" type="file" id="doc_nss" name="doc_nss"
                                       multiple data-max-files="4" data-max-file-size="2MB" 
                                       accept="image/png, image/jpeg, video/mp4, video/mov" 
                                       data-label-idle='
                                        <div class="btn btn-primary mb-3">
                                            <i class="fi-cloud-upload me-1"></i>NSS
                                        </div>
                                '>-->
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Guardar información</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pluginsJs')
    <script src="{{ asset('vendor/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond/dist/filepond.min.js') }}"></script>
    <script src="{{ asset('vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
@endsection