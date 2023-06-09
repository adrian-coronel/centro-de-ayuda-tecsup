@extends('main')

@section('title','Iniciar Sesión')
@section('body-class','auth-background')


@section('content')

<div class="card shadow-lg px-5 py-4 col-11 col-md-6 col-sm-8 col-xl-4 mx-auto text-center position-absolute top-50 start-50 translate-middle">
  <h4 class="text-secondary" style="font-family: 'Poppins', sans-serif;font-weight:600;">¡Hola, <span class="text-primary">te damos la <br> bienvenida!</span></h4>
  <form  action="">
    <div class="form-group mt-3">
      <input class="form-control py-3 bg-light border-0 shadow-sm" type="text" placeholder="DNI">
    </div>
    <div class="form-group mt-3">
      <input class="form-control py-3 bg-light border-0 shadow-sm" type="email" placeholder="Correo">
    </div>
    <a href="#" style="font-size: 14px;" class="mt-5 nav-link text-secondary">Recuperar contraseña</a>
    <div class="w-100 d-flex flex-column">  
      <button class="btn btn-gradient-blue mt-3 mb-2 text-white border-0 py-2 shadow-sm" type="submit">Iniciar sesión</button>
      <span style="font-size: 18px;" class="text-secondary">o</span>    
      <a href="#" class="btn btn-light my-2 py-2 shadow-sm" style="color: #339698;">
        Acceder con Google
        <img id="icon-google" src="{{asset('/img/icon-google.png')}}" alt="">
      </a>
    </div>
  </form>

  <!-- LINK REGISTER -->
  <p class="text-secondary mt-2"><a href="{{route('register')}}">¡Registrate</a> en centro de ayuda <strong class="text-secondary">TECSUP</strong></p>
</div>

@endsection

