<div class="card shadow-lg px-5 py-4 col-11  col-lg-5 col-md-7 col-sm-9 mx-auto text-center">
  <h5>{{ $title }} en Centro de Ayuda <span class="text-primary">TECSUP</span></h5>
  <form  action="">  
    <div class="form-group mt-3">
      <input class="form-control bg-light border-0 shadow-sm" type="text" placeholder="DNI">
    </div>
    <div class="form-group mt-3">
      <input class="form-control bg-light border-0 shadow-sm" type="email" placeholder="Correo">
    </div>
    <div class="btn-group mt-5 w-100">
      <button class="btn btn-primary" type="submit">{{ $btnText }}</button>
    </div>
  </form>
  <p class="mt-3"> {{ $message }}
    <a href="{{ route($link) }}" class="nav-link">{{$a}}</a>
  </p>
</div>