@extends('main')

@section('title','Reportar Incidente')
@section('body-class','home-background')

@section('nav')
  @include('includes.nav')
@endsection
  
@include('includes.lateral-menu') {{--componente--}}


@section('content')

<form action="{{route('incidents.store')}}" method="POST" class="bg-white my-5 d-flex flex-column rounded-2 shadow p-5 col-lg-7 mx-auto" id="support-form" enctype="multipart/form-data">
  @csrf
  <label class="mb-1" for="subject">Asunto</label>
  <input 
    value="{{old('subject',$incident->subject)}}"
    class="form-control" 
    type="text" name="subject"
    placeholder="Ingresa el asunto..." 
    required
  />

  
  <label class="mb-1 mt-4" for="services">Categorías</label>
  <select name="id_service" id="services" style="width: 100%" class="form-select" required>
    @foreach ($services as $service)
      <option
        {{$service->id_service == $selectIdService ? 'selected' : ''}} 
        value="{{$service->id_service}}"
      >
      {{$service->name}}
      </option>
    @endforeach
  </select>


  <label class="mb-1 mt-4" for="description">Describe qué ha ocurrido y cómo ha ocurrido</label>
  <textarea id="description" 
    value="{{old('description ',$incident->description)}}" 
    name="description" class="form-control" 
    placeholder="Describe tu texto aquí..." 
    required>
  </textarea>

  <label class="mb-1 mt-4" for="attachment">Archivo adjunto:</label>
  <div class="file-upload form-control py-5 text-center">
    <label for="file-upload">Arrastra y suelta archivos, pega captura de pantalla o busca</label><br>
    <input class="input-form p-2 rounded border" 
    type="file" name="file" 
    value="{{$incident->file_path}}"
    id="file-upload" style="display: none;" 
    onchange="showFileName(this)"
  />
    <button class="btn btn-secondary px-5 mt-3" type="button" onclick="document.getElementById('file-upload').click()">Subir</button>
  </div>

  <label class="mb-1 mt-4" for="urgency">¿Con qué urgencia hay que arreglar el problema?</label>
  <select id="urgency" name="urgency" class="form-select" value="{{old('urgency',$incident->urgency)}}" required>
    <option value="" disabled selected>Seleccione...</option>
    <option value="critico">Crítico</option>
    <option value="alto">Alto</option>
    <option value="medio">Medio</option>
    <option value="bajo">Bajo</option>
  </select>

  <label class="mb-1 mt-4" for="impact">¿En qué medida te afecta el problema a ti o a los demás?</label>
  <select id="impact" name="impact" class="form-select" required>
    <option value="" disabled selected>Seleccione...</option>
    <option value="Extenso/generalizado">Extenso / generalizado</option>
    <option value="Significativo/grande">Significativo / grande</option>
    <option value="Moderado/limitado">Moderado / limitado</option>
    <option value="Menor/localizado">Menor / localizado</option>
  </select>

  <div class="mt-4">
    <button onclick="showAlert();" class="btn btn-gradient-blue text-white border-0" type="button">Registrar</button>
    <a href="{{route('services.index')}}" class="btn btn-secondary text-white border-0 mx-2" type="button">Regresar</a>
  </div>
  </form>
  </div>

  <!-- Alerta (CREAR COMPONENTE)-->
  <div id="alert-overlay" class="alert-overlay" style="display: none;">
    <div class="bg-white p-4 text-center shadow-sm rounded-3 col-10 col-lg-4 col-md-5 col-sm-7">
      <h3 class="mb-3">¡Todo listo Duberly!</h3>
      <p>Gracias por reportar, nos pondremos a trabajar en ello.</p>
      <img class="alert-image" src="{{asset('/img/alert_form.png')}}" alt="Imagen">

      <div class="d-flex justify-content-center">
        <button id="btn-cancel" class="alert-button">Cancelar</button>
        <button id="btn-send" class="alert-button">Aceptar</button>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  {{-- <script src="{{ asset('js/select2.js') }}"></script> --}}
  <script>   
    //----------ARCHIVO----------//
    function showFileName(input) {
      var fileLabel = document.querySelector('label[for="file-upload"]');
      var fileNameSpan = document.getElementById('file-name');
    
      if (input.files.length > 0) {
        var fileName = input.files[0].name;
        fileLabel.textContent = fileName;
        fileNameSpan.textContent = 'Archivo seleccionado: ' + fileName;
      } else {
        fileLabel.textContent = 'Arrastra y suelta archivos, pega captura de pantalla o busca';
        fileNameSpan.textContent = '';
      }
    }
    
    //----------ALERTA----------//
    // Obtener referencia a los elementos del DOM
    const form = document.getElementById('support-form');
    const alertOverlay = document.getElementById('alert-overlay');
    const alertButtons = document.getElementsByClassName('alert-button');
    const btnSend = document.querySelector('#btn-send');
    const btnCancel = document.querySelector('#btn-cancel');

    function showAlert(){
      alertOverlay.style.display = 'flex';

      //AGREGAR VALIDACIÓN

      btnSend.addEventListener('click',function(event){
        form.submit();
      })

      btnCancel.addEventListener('click',function(event){
        alertOverlay.style.display = 'none';
        form.preventDeault();
      })
    }
  </script>
@endsection
