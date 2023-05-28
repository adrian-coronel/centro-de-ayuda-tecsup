<div class="hover-effect accordion w-100 mb-4">
    <div class="accordion-header d-flex justify-content-between text-align">
        <a href="{{route('incidents.create',$service->id_service)}}" class="p-2 nav-link text-primary" onclick="document.getElementById('send-service').submit()">{{$service->name}}</a>
        <button class="collapsed btn text-secondary text-center" 
            type="button" data-bs-toggle="collapse" 
            data-bs-target="{{'#content-'. $key}}"
        >
            Ver más...
        </button>
        {{-- <form id="send-service" 
          action="{{route('incidents.create',$service->id_service)}}" 
          method="GET">
        </form> --}}
    </div>
    <a class="nav-link">
      <div id="{{'content-'. $key}}" class="accordion-collapse collapse">
        <div class="accordion-body py-0">
          {{$service->description}}
        </div>
      </div>
    </a>
</div>