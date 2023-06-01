@extends('main')

@section('title','Home')
@section('body-class','home-background')

    
@section('content')

  <div class="d-flex mx-auto">
    <div class="text-body col-6 h-100 d-flex flex-column justify-content-center">
      <h1>¡BIENVENIDO!</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt dignissimos maiores nemo incidunt sit. Numquam odio, et ipsam debitis ea, perspiciatis sequi ipsa nihil facere maxime magni facilis veritatis dicta vel quidem eum aperiam tenetur deleniti eaque natus? Quia, aliquid sunt dolores tempore deserunt sed eaque, ipsa non nobis eligendi ipsam optio odit suscipit soluta placeat doloribus iure? Aliquam quisquam, consequuntur maiores fugit labore.</p>
      <div>
        <a href="{{route('services.index')}}" class="btn btn-primary">¡Empezar!</a>
      </div>
    </div>
    <div class="content-img col-6">
      <img class="w-100" src="https://revistaseguridad360.com/wp-content/uploads/2022/06/ciberseguridad.png" alt="">
    </div>
  </div>

@endsection