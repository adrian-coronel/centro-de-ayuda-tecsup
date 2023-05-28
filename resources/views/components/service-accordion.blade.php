<div class="hover-effect accordion w-100 mb-3">
    <div class="accordion-header d-flex justify-content-between text-align">
        <p class="p-2 text-primary">{{$service->name}}</p>
        <a class="collapsed btn text-secondary text-center" 
            type="button" data-bs-toggle="collapse" 
            data-bs-target="{{'#content-'. $key}}"
        >
            Ver más...
        </a>
    </div>
    <div>
      <div id="{{'content-'. $key}}" class="accordion-collapse collapse">
        <div class="accordion-body py-0">
          {{$service->description}}
        </div>
      </div>
    </div>
</div>