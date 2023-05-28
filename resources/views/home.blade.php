@extends('main')

@section('title','Home')
@section('body-class','home-background')

@section('nav')
  @include('includes.nav')
@endsection
  
@include('includes.lateral-menu') {{--componente--}}

    
@section('content')
<div class="card shadow-lg px-5 py-4 col-11 col-lg-7 col-md-10 mx-auto mt-5 mb-5 text-start d-flex align-items-center justify-content-center">
        
  <div>
      <a href="" class="text-decoration-none">Centro de ayuda de Tecsup</a>
      <h4 class="pb-1 pt-4">¡BIENVENIDO DUBERLYCITA!</h4>
      <p class="pb-3">Mediante este sitio buscamos mejorar la experiencia, bienestar y seguridad tanto de estudiantes, como del personal dentro del campus. El programa busca prevenir incidentes y, si ocurren, abordarlos de manera oportuna y eficaz para erradicar cualquier daño o consecuencias negativas.</p>
      <p class="mb-4"><i class='bx bx-paper-plane' style="font-size: 1.5rem"></i><span class="mx-1">Contacta con nosotros sobre</span></p>
  </div>
  
  @foreach ($services as $key => $service)    
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">{{$service->name}}</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="{{'#content-'. $key}}">Ver más...</a>
      </div>
      <div>
        <div id="{{'content-'. $key}}" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
            {{$service->description}}
          </div>
        </div>
      </div>
  </div>
  @endforeach

</div>  
@endsection