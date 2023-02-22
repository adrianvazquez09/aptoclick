<!-- Sign In Modal-->
<div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
    <div class="modal-content">
      <div class="modal-body px-0 py-2 py-sm-0">
        <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
        <div class="row mx-0 align-items-center">
          <div class="col-md-6 border-end-md p-4 p-sm-5">
            <h2 class="h3 mb-4 mb-sm-5">¡Hola!<br>Bienvenido.</h2><img class="d-block mx-auto" src="{{ asset('img/signin-modal/signin.svg') }}" width="344" alt="Illustartion">
            <!-- <div class="mt-4 mt-sm-5">¿No tienes una cuenta? <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Registrate</a></div> -->
          </div>
          <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
            <a class="btn btn-outline-warning w-100 mb-3" id="sesionGoogle" href="{{ route('social.auth', 'google') }}"><i class="fi-google fs-lg me-1"></i>Inicia sesi&oacute;n con Google</a>
          
          <div class="d-flex align-items-center py-3 mb-3">
            <hr class="w-100">
            <div class="px-3">O</div>
            <hr class="w-100">
          </div>
          <a class="btn btn-outline-info w-100 mb-3" id="sesionGoogle" href="{{ route('social.auth', 'facebook') }}"><i class="fi-facebook fs-lg me-1"></i>Inicia sesi&oacute;n con Facebook</a>
          <!-- <form action="{{route('social.entrar', 'entrar')}}" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
          @csrf
          @method('POST')
            <div class="mb-4">
              <label class="form-label mb-2" for="signin-email">Correo</label>
              <input class="form-control" type="email" id="Inemail" name="Inemail" placeholder="Ingresa tu correo" required>
            </div>
            <div class="mb-4">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <label class="form-label mb-0" for="signin-password">Contraseña</label>
              </div>
              <div class="password-toggle">
                <input class="form-control" type="password" id="Inpassword" name="Inpassword" placeholder="Ingresa tu contraseña" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-lg w-100" type="submit">Entrar</button>
          </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <!--<div class="col-md-6 border-end-md p-4 p-sm-5">                  
                    <span class="display-6" style="color: #fd5631">aptoclick</span>
                </div>-->                
                <div class="col-md-6 border-end-md p-4 p-sm-5">
                  <h2 class="h3 mb-4 mb-sm-5">Únete a <label  style="color: #fd5631">aptoclick</label> para acceder a los siguientes beneficios</h2>
                  <ul class="list-unstyled mb-4 mb-sm-5">
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Casas seminueva remodeladas</span></li>
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Créditos enganche inicial </span></li>
                    <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Precios económicos</span></li>
                  </ul><img class="d-block mx-auto" src="{{ asset('img/signin-modal/signup.svg') }}" width="344" alt="Illustartion">                  
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                  <form action="{{route('social.register', 'registro')}}" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
                  @csrf
                  @method('POST')
                    <div class="mb-4">
                      <label class="form-label" for="signup-name">Nombre (s)</label>
                      <input class="form-control" type="text" id="signup-name" name="nombre" placeholder="Ingresa tu nombre(s)" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-name">Apellidos</label>
                      <input class="form-control" type="text" id="signup-lastname" name="apellidos" placeholder="Ingresa tus apellidos" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-email">Correo</label>
                      <input class="form-control" type="email" id="signup-email" name="correo" placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-password">Contraseña <span class='fs-sm text-muted'>min. 8 char</span></label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="signup-password" name="pass" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-password-confirm">Confirmar contraseña</label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="signup-password-confirm" name="confirmPass" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms">Acepto los <a href="{{ route('TerminosCondiciones') }}">Terminos y condiciones</a> y <a href="{{ route('AvisoPrivacidad') }}">Aviso de privacidad</a></label>
                    </div>
                    <button class="btn btn-primary" type="submit">¡Registrate!</button>
                    <!--<button class="btn btn-primary" type="submit" href="{{ route('precalificate.paso1', 0) }}">¡Registrarse!</button>-->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>