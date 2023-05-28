@extends('main')

@section('title','Home')
@section('body-class','home-background')

@section('nav')
  @include('includes.nav')
@endsection
  
@include('includes.lateral-menu') {{--componente--}}

    
@section('content')
<div id="content-home" class="card shadow-lg px-5 py-4 col-11 col-lg-7 col-md-10 mx-auto mt-5 mb-5 text-start d-flex align-items-center justify-content-center">
        
  <div>
      <a href="" class="text-decoration-none">Centro de ayuda de Tecsup</a>
      <h4 class="pb-1 pt-4">¡BIENVENIDO DUBERLYCITA!</h4>
      <p class="pb-3">Mediante este sitio buscamos mejorar la experiencia, bienestar y seguridad tanto de estudiantes, como del personal dentro del campus. El programa busca prevenir incidentes y, si ocurren, abordarlos de manera oportuna y eficaz para erradicar cualquier daño o consecuencias negativas.</p>
      <p class="mb-4"><i class='bx bx-paper-plane' style="font-size: 1.5rem"></i><span class="mx-1">Contacta con nosotros sobre</span></p>
  </div>
  
  <!-- ---------------MANTENIMIENTO--------------- -->
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">Mantenimiento</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="#content-1">Ver más...</a>
      </div>
      <div>
        <div id="content-1" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
              Esta categoría se eca en incidentes relacionados con el mantenimiento de las máquinas y equipos en la institución,  entre otros.
          </div>
        </div>
      </div>
  </div>

          
  <!-- ---------------SEGURIDAD--------------- -->
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">Seguridad</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="#content-2">Ver más...</a>
      </div>
      <div>
        <div id="content-2" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
            En esta categoría se podrían reportar incidentes que no estén relacionados con ninguna de las anteriores categorías.
          </div>
        </div>
      </div>
  </div>

          
  <!-- ---------------MEDIO AMBIENTE--------------- -->
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">Medio ambiente</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="#content-3">Ver más...</a>
      </div>
      <div>
        <div id="content-3" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
              Se pueden reportar incidentes que afecten al medio ambiente, como derrames de químicos, contaminación del aire, del agua, ruido excesivo, entre otros.
        </div>
      </div>
     </div>
  </div>


          
  <!-- ---------------TRANSPORTE--------------- -->
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">Transporte</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="#content-4">Ver más...</a>
      </div>
      <div>
        <div id="content-4" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
              En esta categoría se podrían reportar incidentes relacionados con la gestión administrativa de la institución, como errores en la matrícula, problemas con la facturación, entre otros.
          </div>
        </div>
      </div>
  </div>


          
  <!-- ---------------OTROS--------------- -->
  <div class="hover-effect accordion w-100 mb-3">
      <div class="accordion-header d-flex justify-content-between text-align">
          <p class="p-2 text-primary">Otros</p>
          <a class="collapsed btn text-secondary text-center" type="button" data-bs-toggle="collapse" data-bs-target="#content-5">Ver más...</a>
      </div>
      <div>
        <div id="content-5" class="accordion-collapse collapse">
          <div class="accordion-body py-0">
            En esta categoría se podrían reportar incidentes que no estén relacionados con ninguna de las anteriores categorías.
          </div>
        </div>
      </div>
  </div>


</div>  
@endsection