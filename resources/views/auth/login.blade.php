@extends('main')

@section('title','Iniciar Sesión')

@section('content')

  <div class="d-flex align-items-center" style="height: 88vh">
    @include('auth._form',[
    'btnText'=>'Siguiente',
    'title'=>'Iniciar sesión',
    'message'=>'¿Necesitas cuenta?',
    'a'=>'Registrarse',
    'link'=>'register'
    ])
  </div>

@endsection

