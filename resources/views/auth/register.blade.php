@extends('main')

@section('title','Iniciar Sesión')
@section('body-class','auth-background')

@section('content')

<div class="card shadow-lg px-5 py-4 col-11  col-lg-7 col-xl-5 col-md-8  mx-auto text-center position-absolute top-50 start-50 translate-middle border-0">
  <h4 class="text-primary " style="font-weight:600;">Regístrate e inicia sesión</h4>

  <!-- FORMULARIO -->
  <form id="auth-register" action="">
    <div class="form-group mt-3 text-start">
      <label for="" class="text-weight-300 text-size-14">Datos sobre la cuenta</label>
      <div class="row width-responsibe">
        <input class="input-form py-3 mt-2" type="email" placeholder="Correo electrónico">
      </div>
      <div class="row width-responsibe mt-2">
        <input class="input-form py-3 col-5" type="password" placeholder="Contraseña">
        <input class="input-form py-3 col-5 " type="password" placeholder="Confirmar contraseña">
        <!-- Esto se mostrará en las validaciones -->
        <!-- <p style="padding-left: 10px; padding-right: 0px;" class="text-weight-300 mt-2 text-size-14 mb-0 col-6"><img id="icon-alerta" src="./img/alerta.png"> ocho o más caracteres una combinación de letras, números y simbolos</p> -->
      </div>
    </div>

    <br>

    <div class="form-group mt-4 text-start">
      <label for="" class="text-weight-300 text-size-14">Información sobre tí</label>
      <div class="row width-responsibe">
        <input class="input-form py-3 mt-2" type="text" placeholder="Nombre Completo">
      </div>
      <div class="row width-responsibe mt-2">
        <select name="categoria" class="text-secondary input-form py-3 col-6" id="floatingSelect">
          <option selected>Categoría</option>
          <option value="mantenimiento">Mantenimiento</option>
          <option value="seguridad">Seguridad</option>
          <option value="salud">Salud</option>
        </select> 
        <input class="input-form py-3 col-5" type="text" placeholder="Teléfono">
        
      </div>
      <div class="row width-responsibe mt-2">
        <select name="dni" class="text-secondary input-form py-3 col-4" id="floatingSelect">
          <option selected>DNI</option>
          <option value="mantenimiento">Mantenimiento</option>
          <option value="seguridad">Seguridad</option>
          <option value="salud">Salud</option>
        </select> 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        <input class="input-form py-3 col-7" type="text" placeholder="Nro. de documento">
        
      </div>
    </div>

      <button class="btn btn-gradient-blue w-100 mt-4 mb-2 text-white border-0 py-2 shadow-sm">Iniciar sesión</button>
     
  </form>

</div>

@endsection

