@extends('main')

@section('title','Reportar Incidente')
@section('body-class','home-background')

@section('nav')
  @include('includes.nav')
@endsection
  
@include('includes.lateral-menu') {{--componente--}}


@section('content')
<form class="mt-5 bg-white d-flex flex-column rounded-2 shadow p-5 col-lg-7 mx-auto" id="support-form">
  <label class="mb-1" for="asunto">Asunto</label>
  <input class="form-control" type="text" id="asunto" placeholder="Ingresa el asunto..." required>

  <label class="mb-1 mt-4" for="categories">Categorías</label>
  <select id="categories" class="form-select" required>
    <option value="" disabled selected>Seleccione...</option>
    <option value="mantenimiento">Mantenimiento</option>
    <option value="seguridad">Seguridad</option>
    <option value="medio_ambiente">Medio ambiente</option>
  </select>

  <label class="mb-1 mt-4" for="description">Describe qué ha ocurrido y cómo ha ocurrido</label>
  <textarea id="description" class="form-control" placeholder="Describe tu texto aquí..." required></textarea>

  <label class="mb-1 mt-4" for="attachment">Archivo adjunto:</label>
  <div class="file-upload form-control py-5 text-center">
    <label for="file-upload">Arrastra y suelta archivos, pega captura de pantalla o busca</label><br>
    <input class="input-form p-2 rounded border" type="file" id="file-upload" style="display: none;" onchange="showFileName(this)">
    <button class="btn btn-secondary px-5 mt-3" type="button1" onclick="document.getElementById('file-upload').click()">Subir</button>
  </div>

  <label class="mb-1 mt-4" for="urgency">¿Con qué urgencia hay que arreglar el problema?</label>
  <select id="urgency" class="form-select" required>
    <option value="" disabled selected>Seleccione...</option>
    <option value="critico">Crítico</option>
    <option value="alto">Alto</option>
    <option value="medio">Medio</option>
    <option value="bajo">Bajo</option>
  </select>

  <label class="mb-1 mt-4" for="impact">¿En qué medida te afecta el problema a ti o a los demás?</label>
  <select id="impact" class="form-select" required>
    <option value="" disabled selected>Seleccione...</option>
    <option value="extenso">Extenso / generalizado</option>
    <option value="significativo">Significativo / grande</option>
    <option value="moderado">Moderado / limitado</option>
    <option value="menor">Menor / localizado</option>
  </select>

  <div class="mt-4">
    <button class="btn btn-gradient-blue text-white border-0" type="submit">Registrar</button>
    <a href="{{route('home')}}" class="btn btn-secondary text-white border-0 mx-2" type="button">Regresar</a>
  </div>
  </form>
  </div>

  <!-- Alerta -->
  <div id="alert-overlay" class="alert-overlay" style="display: none;">
    <div class="bg-white p-4 text-center shadow-sm rounded-3">
      <h3 class="mb-3">¡Todo listo Duberly!</h3>
      <p>Gracias por reportar, nos pondremos a trabajar en ello.</p>
      <img class="alert-image" src="{{asset('/img/alert_form.png')}}" alt="Imagen">

      <div class="d-flex justify-content-center">
        <button class="alert-button">Cancelar</button>
        <button class="alert-button">Aceptar</button>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
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
  
  // Agregar evento de envío del formulario
  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar que el formulario se envíe
  
    // Mostrar la alerta
    alertOverlay.style.display = 'flex';
  });
  
  // Agregar eventos a los botones de la alerta
  for (let i = 0; i < alertButtons.length; i++) {
    alertButtons[i].addEventListener('click', function () {
      // Ocultar la alerta
      alertOverlay.style.display = 'none';
    });
  }
  </script>
@endsection