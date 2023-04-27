@extends('main')

@section('title','Iniciar Sesión')

@section('content')

  <div class="d-flex align-items-center" style="height: 88vh">
    @include('auth._form',[
    'btnText'=>'Registrarse',
    'title'=>'Registrarse',
    'message'=>'¿Ya tienes una cuenta?',
    'a'=>'Iniciar sesión',
    'link'=>'login'
    ])
  </div>

@endsection

